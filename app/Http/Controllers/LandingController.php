<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home() 
    {   
        $latestCourse = Pelatihan::latest()->take(3)->get();

        // Memanipulasi deskripsi sebelum mengirim data ke view
        $latestCourse->transform(function ($item) {
            $item->deskripsi = Str::words($item->deskripsi, 15, ' .....'); // Batasi deskripsi menjadi 15 kata
            return $item;
        });

        return view('user.page.home',compact('latestCourse'), [
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