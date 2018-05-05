<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            'content'       => 'required',
            'image'         => '',
            'attachment'    => ''
        ]);

        $id = DB::table('posts')->insertGetId([
            'title'         => $request->title,
            'content'       => $request->content,
            'image'         => '',
            'attachment'    => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $files = $request->file('image');
        $image_path = '';

        if ($request->hasFile('image')) {
            foreach ($files as $file) {
                $path = $file->store(
                    '/public/'.$id
                );
                Storage::disk('local')->put('/public/'.$id, $file);
                // $image_path = 'storage/'.substr($path, 7);
                $image_path = $path;
            }
        }

        $files = $request->file('attachment');
        $attachment_path = '';

        if ($request->hasFile('attachment')) {
            foreach ($files as $file) {
                $path = $file->store(
                    '/public/'.$id
                );
                Storage::disk('local')->put('/public/'.$id, $file);
                // $attachment_path = 'storage/'.substr($path, 7);
                $attachment_path = $path;
            }
        }

        DB::table('posts')->where('post_id', $id)->update([
            'image'         => $image_path,
            'attachment'    => $attachment_path
        ]);

        return redirect()->route('admin.posts.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::table('posts')->where('posts.post_id', '=', $id)->first();

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = DB::table('posts')->where('posts.post_id', '=', $id)->first();

        return view('posts.edit')->with('post', $post);
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

        DB::table('posts')->where('post_id', $id)->update([
            'title'         => $request->title,
            'content'       => $request->content,
            'image'         => $request->image,
            'attachment'    => $request->attachment,
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        return redirect()->route('admin.posts.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('posts')->where('post_id', $id)->delete();

        return redirect()->route('admin.posts.index');
    }
}
