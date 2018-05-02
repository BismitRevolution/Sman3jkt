<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Teacher;

class PageController extends Controller
{
    public function index() {
        return view('index');
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

    public function getPrestasi() {
        return view('pages.prestasi');
    }

    public function getAlumni() {
        return view('pages.alumni');
    }
}
