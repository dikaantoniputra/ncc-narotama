<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriPelatihan;
use App\Models\Lowongan;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function home() 
    {   

        $latestArtikel = Berita::latest()->take(3)->get();

        // Memanipulasi deskripsi sebelum mengirim data ke view
        $latestArtikel->transform(function ($item) {
            $item->deskripsi = Str::words($item->deskripsi, 15, ' .....'); // Batasi deskripsi menjadi 15 kata
            return $item;
        });

        $latestCourse = Pelatihan::latest()->take(3)->get();

        // Memanipulasi deskripsi sebelum mengirim data ke view
        $latestCourse->transform(function ($item) {
            $item->deskripsi = Str::words($item->deskripsi, 15, ' .....'); // Batasi deskripsi menjadi 15 kata
            return $item;
        });

        $latestVacancy = Lowongan::latest()->take(2)->get();

        $latestVacancy->transform(function ($item) {
            $item->deskripsi_pekerjaan = Str::words($item->deskripsi_pekerjaan, 30, ' .....');
            return $item;
        });

        return view('user.page.home',compact('latestCourse', 'latestVacancy','latestArtikel'), [
            "title" => "Beranda"
        ]);
    }

    // public function news()
    // {
    //     return view('user.page.news', [
    //         "title" => "Berita"
    //     ]);
    // }

    // public function detailNews()
    // {
    //     return view('user.page.detailNews', [
    //         "title" => "Detail Berita"
    //     ]);
    // }
}