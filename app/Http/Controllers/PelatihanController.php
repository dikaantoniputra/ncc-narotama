<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\KategoriPelatihan;
use Illuminate\Support\Str;
use App\Models\Materi;
use App\Models\Peserta;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* if ($request->ajax()) {
            $model = 'pelatihan';
            // $data = User::select('*');
            return Datatables::of(Pelatihan::with('user','kategoripelatihan'))

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
        } */

        $dataPelatihan = Pelatihan::all();

        return view('admin.page.pelatihan.view',compact('dataPelatihan'), ["title" => "Data Pelatihan"]);
    }

    public function course(Request $request)
    {   
        $latestCourse = Pelatihan::latest()->take(3)->get();

        // Memanipulasi deskripsi sebelum mengirim data ke view
        $latestCourse->transform(function ($item) {
            $item->deskripsi = Str::words($item->deskripsi, 15, ' .....'); // Batasi deskripsi menjadi 15 kata
            return $item;
        });

        $keywordNamaPelatihan = $request->input('nama_pelatihan');
        $keywordKategori = $request->input('kategori');

        $searchCourse = Pelatihan::when($keywordNamaPelatihan, function($query) use ($keywordNamaPelatihan) {
            $query->where('nama_pelatihan', 'like', '%'.$keywordNamaPelatihan.'%');
        })
        ->when($keywordKategori, function($query) use ($keywordKategori) {
            $query->whereHas('kategoripelatihan', function($q) use ($keywordKategori) {
                $q->where('kategori', 'like', '%'.$keywordKategori.'%');
            });
        })
        ->paginate(6);
        
        $searchCourse->transform(function ($item) {
            $item->deskripsi = Str::words($item->deskripsi, 15, ' .....'); // Batasi deskripsi menjadi 15 kata
            return $item;
        });

        $userId = auth()->id(); // Mendapatkan ID pengguna yang login

        $registeredCourse = Peserta::where('mahasiswa_id', $userId)->get();

        $registeredCourse = $registeredCourse->sortBy(function ($item) {
            return $item->status === 'Terdaftar' ? 0 : 1;
        });

        return view('user.page.course', compact('latestCourse', 'searchCourse'), [
            "title" => "Pelatihan",
            "registeredCourse" => $registeredCourse
        ]);
    }

    public function detailCourse($id)
    {   
        $detailCourse = Pelatihan::findOrFail($id);

        // Ambil data pengguna
        $user = auth()->user();

        // Periksa apakah pengguna sudah terdaftar pada pelatihan tertentu
        $isRegistered = Peserta::where('pelatihan_id', $detailCourse->id)
            ->where('mahasiswa_id', $user->id)
            ->exists();

        return view('user.page.detailCourse', compact('detailCourse'), [
            "title" => "Detail Pelatihan",
            "isRegistered" => $isRegistered
        ]);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerCourse(Request $request)
    {
        $validatedData = $request->validate([
            'pelatihan_id' => 'required|numeric',
        ]);

        $pelatihanId = $request->input('pelatihan_id');
        $mahasiswaId = auth()->user()->id;

        $peserta = new Peserta();
        $peserta->pelatihan_id = $pelatihanId;
        $peserta->mahasiswa_id = $mahasiswaId;
        $peserta->status = 'Terdaftar';
        $peserta->save();

        return redirect()->back()->with('success', 'Anda berhasil mendaftar pada pelatihan ini');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = KategoriPelatihan::all();

        return view('admin.page.pelatihan.create', compact('kategori'), ["title" => "Buat Kategori Pelatihan"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Pelatihan::$rules);
    
        try {
            $article = new Pelatihan($request->all());
    
            // Mengambil data pengguna yang sedang login
            $user = auth()->user();
    
            // Menyimpan data pengguna yang sedang login ke dalam artikel
            $article->user_id = $user->id;
    
            // Handle dokumentasi_pelatihan file
            if ($request->hasFile('dokumentasi_pelatihan') && $request->file('dokumentasi_pelatihan')->isValid()) {
                $dokumentasiPelatihanFile = $request->file('dokumentasi_pelatihan');
                $dokumentasiPelatihanFileName = 'dokumentasi_' . time() . '.' . $dokumentasiPelatihanFile->getClientOriginalExtension();
                $dokumentasiPelatihanFile->move(public_path('uploads/'), $dokumentasiPelatihanFileName);
                $article->dokumentasi_pelatihan = $dokumentasiPelatihanFileName;
            }
    
            // Handle poster file
            if ($request->hasFile('poster') && $request->file('poster')->isValid()) {
                $posterFile = $request->file('poster');
                $posterFileName = 'poster_' . time() . '.' . $posterFile->getClientOriginalExtension();
                $posterFile->move(public_path('uploads/'), $posterFileName);
                $article->poster = $posterFileName;
            }
    
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
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = KategoriPelatihan::all();
        $pelatihan = Pelatihan::select('*')->findOrFail($id);
        return view('admin.page.pelatihan.show', [
            'pelatihan' => $pelatihan,
            'kategori' => $kategori
        ]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
        $kategori = KategoriPelatihan::all();
        $pelatihan = Pelatihan::select('*')->findOrFail($id);
        return view('admin.page.pelatihan.edit', [
            'pelatihan' => $pelatihan,
            'kategori' => $kategori
        ]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Pelatihan::$rules);
    
        try {
            // Find the Pelatihan by ID
            $pelatihan = Pelatihan::findOrFail($id);
    
            // Update Pelatihan data
            $pelatihan->fill($request->all());
    
            // Mengambil data pengguna yang sedang login
            $user = auth()->user();
    
            // Menyimpan data pengguna yang sedang login ke dalam artikel
            $pelatihan->user_id = $user->id;
    
            // Handle dokumentasi_pelatihan file
            if ($request->hasFile('dokumentasi_pelatihan') && $request->file('dokumentasi_pelatihan')->isValid()) {
                $dokumentasiPelatihanFile = $request->file('dokumentasi_pelatihan');
                $dokumentasiPelatihanFileName = 'dokumentasi_' . time() . '.' . $dokumentasiPelatihanFile->getClientOriginalExtension();
                $dokumentasiPelatihanFile->move(public_path('uploads/'), $dokumentasiPelatihanFileName);
                $pelatihan->dokumentasi_pelatihan = $dokumentasiPelatihanFileName;
            }
    
            // Handle poster file
            if ($request->hasFile('poster') && $request->file('poster')->isValid()) {
                $posterFile = $request->file('poster');
                $posterFileName = 'poster_' . time() . '.' . $posterFile->getClientOriginalExtension();
                $posterFile->move(public_path('uploads/'), $posterFileName);
                $pelatihan->poster = $posterFileName;
            }
    
            $pelatihan->save();
    
            $request->session()->flash('success', 'Berhasil memperbarui.');
            return redirect()->route('pelatihans.index')->with('success', 'Data berhasil diperbarui.');
    
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Gagal memperbarui.');
            $request->session()->flash('error-details', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Pelatihan = Pelatihan::find($id);
        if ($Pelatihan) {
            $Pelatihan->delete();
            return redirect()->back()->withInput()->with('success', 'Kegiatan Berhasil Di Tambahkan.');
        } else {
            return redirect()->back()->withInput()->with('failed', 'Kegiatan Gagal Di Hapus.');
        }
    }
}
