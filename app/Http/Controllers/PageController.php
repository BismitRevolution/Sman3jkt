<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Teacher;
use Analytics;
use Spatie\Analytics\Period;

class PageController extends Controller
{
    public function index() {
        $pageViews = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $activeUsers = Analytics::getAnalyticsService()
                        ->data_realtime->get("ga:".env('ANALYTICS_VIEW_ID'), 'rt:activeVisitors')
                        ->totalsForAllResults['rt:activeVisitors'];

        $albums = DB::table('albums')->orderBy('album_id')->get();

        foreach ($albums as $album) {
            $album->photos = DB::table('photos')
                                ->where('photos.album_id', '=', $album->album_id)
                                ->first();
        }
        return view('index')->with(['pageViews' => $pageViews, 'activeUsers' => $activeUsers, 'albums' => $albums]);
    }

    public function getProfile() {
    	return view('pages.profile');
    }

    public function getSarana() {
    	return view('pages.sarana-prasarana');
    }

    public function getStafManajemen() {
    	return view('pages.staf-manajemen');
    }

    public function getGuru() {
        $guru = Teacher::all();
    	return view('pages.guru')->with('teachers', $guru);
    }

    public function getPPDB() {
        return view('pages.ppdb');
    }

    public function getAkademik() {
        return view('pages.akademik');
    }

    public function getBeritaAcara() {
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();
        return view('pages.berita-acara')->with('posts', $posts);
    }

    public function getPost(Request $request) {
        $post = DB::table('posts')->where('post_id', $request->post_id)->first();
        return view('pages.show-post')->with('post', $post);
    }

    public function getAlbum(Request $request) {
        $albums = DB::table('albums')->orderBy('album_id')->get();

        foreach ($albums as $album) {
            $album->photos = DB::table('photos')
                                ->where('photos.album_id', '=', $album->album_id)
                                // ->limit(4)
                                ->get();
        }

        return view('pages.show-album')->with('albums', $albums);
    }

    public function getPrestasi() {
        return view('pages.prestasi');
    }

    public function getAlumni() {
        return view('pages.alumni');
    }
}
