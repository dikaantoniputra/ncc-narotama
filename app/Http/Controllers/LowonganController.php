<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\KategoriLowongan;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = 'lowongan';
            // $data = User::select('*');
            return Datatables::of(Lowongan::with('user','kategorilowongan'))

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

        return view('admin.page.lowongan.view', ["title" => "Data Lowongan"]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = KategoriLowongan::all();

        return view('admin.page.lowongan.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Lowongan::$rules);
    
        try {
            $article = new Lowongan($request->all());
    
            // Mengambil data pengguna yang sedang login
            $user = auth()->user();
    
            // Menyimpan data pengguna yang sedang login ke dalam artikel
            $article->user_id = $user->id;
    
            // Handle logo file
            if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
                $dokumentasiPelatihanFile = $request->file('logo');
                $dokumentasiPelatihanFileName = 'dokumentasi_' . time() . '.' . $dokumentasiPelatihanFile->getClientOriginalExtension();
                $dokumentasiPelatihanFile->move(public_path('uploads/'), $dokumentasiPelatihanFileName);
                $article->logo = $dokumentasiPelatihanFileName;
            }
    
            // Handle poster file
    
    
            $article->save();

    
            $request->session()->flash('success', 'Berhasil menambahkan.');
            return redirect()->route('pelatihans.index')->with('success', 'Data berhasil disimpan.');
    
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Gagal menambahkan.');
            $request->session()->flash('error-details', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function show(Lowongan $lowongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kategori = KategoriLowongan::all();
        $lowongan = Lowongan::select('*')->findOrFail($id);
        return view('admin.page.lowongan.edit', [
            'lowongan' => $lowongan,
            'kategori' => $kategori
        ]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Lowongan::$rules);
    
        try {
            // Find the Pelatihan by ID
            $pelatihan = Lowongan::findOrFail($id);
    
            // Update Pelatihan data
            $pelatihan->fill($request->all());
    
            // Mengambil data pengguna yang sedang login
            $user = auth()->user();
    
            // Menyimpan data pengguna yang sedang login ke dalam artikel
            $pelatihan->user_id = $user->id;
    
            // Handle logo file
            if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
                $dokumentasiPelatihanFile = $request->file('logo');
                $dokumentasiPelatihanFileName = 'dokumentasi_' . time() . '.' . $dokumentasiPelatihanFile->getClientOriginalExtension();
                $dokumentasiPelatihanFile->move(public_path('uploads/'), $dokumentasiPelatihanFileName);
                $pelatihan->logo = $dokumentasiPelatihanFileName;
            }
    
            // Handle poster file
           
    
            $pelatihan->save();
    
            $request->session()->flash('success', 'Berhasil memperbarui.');
            return redirect()->route('lowongans.index')->with('success', 'Data berhasil diperbarui.');
    
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Gagal memperbarui.');
            $request->session()->flash('error-details', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lowongan $lowongan)
    {
        //
    }
}
