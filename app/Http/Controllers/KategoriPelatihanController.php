<?php

namespace App\Http\Controllers;

use App\Models\KategoriPelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;


class KategoriPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = 'kategoripelatihan';
            // $data = User::select('*');
            return Datatables::of(KategoriPelatihan::select('*'))

            ->addColumn('action', function ($object) use ($model) {
                $text = "";
                $text.= '<a href="'.route($model.'s.edit', [$model => $object]).'" class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                <path d="M16 5l3 3"></path>
             </svg> Edit</a>';
                $text.= "<form class='form-horizontal' style='display: inline;' method='POST' action='".route($model.'s.destroy', [$model => $object])."'><input type='hidden' name='_token' value='".csrf_token()."'> <input type='hidden' name='_method' value='DELETE'><button class='btn btn-sm btn-danger' type='submit'><i class='fas fa-trash'></i> Hapus</button></form><form>";
                return $text;
            })
            ->rawColumns(['action'])

                ->make(true);
        }

        return view('admin.page.k_pelatihan.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.k_pelatihan.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $article = new KategoriPelatihan($request->all());

            // Mengambil data pengguna yang sedang login

            $article->save();

            $request->session()->flash('success', 'Berhasil menambahkan.');
            return redirect()->route('kategoripelatihans.index')->with('success', 'Data berhasil disimpan.');

        } catch (\Exception $e) {
            $request->session()->flash('error', 'Gagal menambahkan .');
            $request->session()->flash('error-details', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriPelatihan  $kategoriPelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriPelatihan $kategoriPelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriPelatihan  $kategoriPelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kategoripelatihans = KategoriPelatihan::select('*')->findOrFail($id);
        return view('admin.page.k_pelatihan.edit', [
            'kategoripelatihans' => $kategoripelatihans,
        ]);
       
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriPelatihan  $kategoriPelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang diperbarui
    
        try {
            // Cari kegiatan berdasarkan ID
            $article = KategoriPelatihan::find($id);
    
            if (!$article) {
                return redirect()->route('kategoripelatihans.index')->with('error', 'Kegiatan tidak ditemukan.');
            }
           
            $article->update($request->all());
    
            $article->save();
    
            $request->session()->flash('success', 'Berhasil menambahkan.');
            return redirect()->route('kategoripelatihans.index')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui kegiatan. ' . $e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriPelatihan  $kategoriPelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $KategoriPelatihan = KategoriPelatihan::find($id);
        if ($KategoriPelatihan) {
            $KategoriPelatihan->delete();
            return redirect()->back()->withInput()->with('success', 'Kegiatan Berhasil Di Tambahkan.');
        } else {
            return redirect()->back()->withInput()->with('success', 'Kegiatan Berhasil Di Tambahkan.');
        }
    }
}
