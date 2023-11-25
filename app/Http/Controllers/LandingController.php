<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home() 
    {   
        return view('user.page.home', [
            "title" => "Beranda"
        ]);
    }

    public function news()
    {
        return view('user.page.news', [
            "title" => "Berita"
        ]);
    }

    public function detailNews()
    {
        return view('user.page.detailNews', [
            "title" => "Detail Berita"
        ]);
    }

    public function course()
    {
        return view('user.page.course', [
            "title" => "Pelatihan"
        ]);
    }

    public function detailCourse()
    {
        return view('user.page.detailCourse', [
            "title" => "Detail Pelatihan"
        ]);
    }

    public function vacancy()
    {
        return view('user.page.vacancy', [
            "title" => "Lowongan"
        ]);
    }

    public function detailVacancy()
    {
        return view('user.page.detailVacancy', [
            "title" => "Detail Lowongan"
        ]);
    }
}