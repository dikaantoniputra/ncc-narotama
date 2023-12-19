<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vacancyData = Berita::all();
        

        return view('admin.page.berita.view', compact('vacancyData'), ["title" => "Data Lowongan"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Berita::$rules);

        try {
            $article = new Berita($request->all());

            // Mengambil data pengguna yang sedang login
            $user = auth()->user();

            // Menyimpan data pengguna yang sedang login ke dalam artikel
            $article->user_id = $user->id;

            if ($request->hasFile('cover')) {
                $file = $request->file('cover');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('uploads/'); // Lokasi penyimpanan lokal
                $file->move($path, $filename);
                $article->cover = $filename;
            }

            $article->save();

            $request->session()->flash('success', 'Berhasil menambahkan.');
            return redirect()->route('beritas.index')->with('success', 'Data berhasil disimpan.');

        } catch (\Exception $e) {
            $request->session()->flash('error', 'Gagal menambahkan .');
            $request->session()->flash('error-details', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $berita = Berita::select('*')->findOrFail($id);
        return view('admin.page.berita.edit', [
            'berita' => $berita,
        ]);
       
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang diperbarui
        $request->validate(Berita::$rules);
    
        try {
            // Cari kegiatan berdasarkan ID
            $article = Berita::find($id);
    
            if (!$article) {
                return redirect()->route('kegiatan.index')->with('error', 'Kegiatan tidak ditemukan.');
            }
    
           
            $article->update($request->all());
    
          
    
            if ($request->hasFile('cover')) {
                $file = $request->file('cover');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('uploads/'); // Lokasi penyimpanan lokal
                $file->move($path, $filename);
                $article->cover = $filename;
            }

            $article->save();
    
            $request->session()->flash('success', 'Berhasil menambahkan.');
            return redirect()->route('beritas.index')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui kegiatan. ' . $e->getMessage());
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Berita = Berita::find($id);
        if ($Berita) {
            $Berita->delete();
            return redirect()->back()->withInput()->with('success', 'Kegiatan Berhasil Di Tambahkan.');
        } else {
            return redirect()->back()->withInput()->with('success', 'Kegiatan Berhasil Di Tambahkan.');
        }
    }
}
