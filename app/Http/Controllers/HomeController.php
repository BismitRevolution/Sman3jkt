<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = DB::table('albums')->last();

        // foreach ($albums as $album) {
            $album->photos = DB::table('photos')
                                ->where('photos.album_id', '=', $album->album_id)
                                ->limit(5)
                                ->get();
        // }
        dd($album);
        return view('home')->with('album', $album);
    }
}
