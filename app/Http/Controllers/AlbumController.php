<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = DB::table('albums')->get();

        return view('albums.index')->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|max:255',
            'description'   => 'required',
            'photos'        => 'required',
        ]);

        $id = DB::table('albums')->insertGetId([
            'title'         => $request->title,
            'description'   => $request->description,
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $files = $request->file('photos');

        if ($request->hasFile('photos')) {
            foreach ($files as $file) {
                $path = $file->store(
                    '/public/'.$id
                );
                Storage::disk('local')->put('/public/'.$id, $file);
                // $image_path = 'storage/'.substr($path, 7);

                $photo_id = DB::table('photos')->insertGetId([
                    'photo_path'    => $path,
                    'album_id'      => $id,
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                ]);
            }
        }

        return redirect()->route('admin.albums.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = DB::table('albums')->where('albums.album_id', '=', $id)->first();
        $photos = DB::table('photos')->where('photos.album_id', '=', $id)->get();

        return view('albums.show')->with('album', $album)->with('photos', $photos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = DB::table('albums')->where('albums.album_id', '=', $id)->first();
        $photos = DB::table('photos')->where('photos.album_id', '=', $id)->get();


        return view('albums.edit')->with('album', $album)->with('photos', $photos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required|max:255',
            'content'       => 'required',
            'image'         => '',
            'attachment'    => ''
        ]);

        DB::table('albums')->where('album_id', $id)->update([
            'title'         => $request->title,
            'content'       => $request->content,
            'image'         => $request->image,
            'attachment'    => $request->attachment,
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        return redirect()->route('admin.albums.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('albums')->where('album_id', $id)->delete();

        return redirect()->route('admin.albums.index');
    }
}
