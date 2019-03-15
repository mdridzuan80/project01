<?php

namespace App\Http\Controllers;

class DefaultController extends Controller
{
    public function index()
    {
        //
        return view('default.index');
    }

    public function diri()
    {
        return view('diri.index');
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function galeri()
    {
        return view('galeri.index');
    }

    public function resume()
    {
        return view('resume.index');
    }
}
