<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Models\KategoriPelatihan;
use App\Http\Controllers\Controller;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $dataPelatihan = Pelatihan::all();
        $peserta = Peserta::all();
        return view('admin.page.peserta.view',compact('dataPelatihan'), ["title" => "Data Pelatihan"]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = KategoriPelatihan::all();
        $pelatihan = Pelatihan::select('*')->findOrFail($id);
        return view('admin.page.peserta.show', [
            'pelatihan' => $pelatihan,
            'kategori' => $kategori
        ]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}
