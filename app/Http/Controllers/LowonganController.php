<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\KategoriLowongan;
use App\Models\Lamaran;
use App\Models\Pelatihan;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* if ($request->ajax()) {
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
        } */

        $vacancyData = Lowongan::all();
        

        return view('admin.page.lowongan.view', compact('vacancyData'), ["title" => "Data Lowongan"]);
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
                $logoFile = $request->file('logo');
                $logoFileName = 'logo_' . time() . '.' . $logoFile->getClientOriginalExtension();
                $logoFile->move(public_path('uploads/'), $logoFileName);
                $article->logo = $logoFileName;
            }
    
            // Handle poster file
    
    
            $article->save();

    
            $request->session()->flash('success', 'Berhasil menambahkan.');
            return redirect()->route('lowongans.index')->with('success', 'Data berhasil disimpan.');
    
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
    public function show($id)
    {
        //
        $kategori = KategoriLowongan::all();
        $lowongan = Lowongan::select('*')->findOrFail($id);
        return view('admin.page.lowongan.show', [
            'lowongan' => $lowongan,
            'kategori' => $kategori
        ]);
       
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
            // Mendapatkan lowongan berdasarkan ID
            $article = Lowongan::findOrFail($id);
    
            // Memperbarui data lowongan
            $article->update($request->all());
    
            // Mengambil data pengguna yang sedang login
            $user = auth()->user();
    
            // Memperbarui data pengguna yang sedang login ke dalam artikel
            $article->user_id = $user->id;
    
            // Handle logo file
            if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
                $logoFile = $request->file('logo');
                $logoFileName = 'logo_' . time() . '.' . $logoFile->getClientOriginalExtension();
                $logoFile->move(public_path('uploads/'), $logoFileName);
                $article->logo = $logoFileName;
            }
    
            // Handle poster file
            // ... (Tambahkan logika penanganan file poster jika diperlukan)
    
            $article->save();
    
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
    public function destroy($id)
    {
        $Pelatihan = Lowongan::find($id);
        if ($Pelatihan) {
            $Pelatihan->delete();
            return redirect()->back()->withInput()->with('success', 'Lowongan Berhasil Di Tambahkan.');
        } else {
            return redirect()->back()->withInput()->with('failed', 'Lowongan Gagal Di Hapus.');
        }
    }



    //User View
    public function vacancy(Request $request)
    {
        $latestVacancy = Lowongan::latest()->take(2)->get();

        // Memanipulasi deskripsi sebelum mengirim data ke view
        $latestVacancy->transform(function ($item) {
            $item->deskripsi_pekerjaan = Str::words($item->deskripsi_pekerjaan, 15, ' .....'); // Batasi deskripsi menjadi 15 kata
            return $item;
        });

        $keywordPositionName = $request->input('title_pekerjaan');
        $keywordCategory = $request->input('kategori');
        $keywordCity = $request->input('kota');

        $searchVacancy = Lowongan::when($keywordPositionName, function($query) use ($keywordPositionName) {
            $query->where('title_pekerjaan', 'like', '%'.$keywordPositionName.'%');
        })
        ->when($keywordCategory, function($query) use ($keywordCategory) {
            $query->whereHas('kategorilowongan', function($q) use ($keywordCategory) {
                $q->where('kategori', 'like', '%'.$keywordCategory.'%');
            });
        })
        ->when($keywordCity, function($query) use ($keywordCity) {
            $query->where('kota', 'like', '%'.$keywordCity.'%');
        })
        ->paginate(6);
        
        $searchVacancy->transform(function ($item) {
            $item->deskripsi_pekerjaan = Str::words($item->deskripsi_pekerjaan, 15, ' .....'); // Batasi deskripsi menjadi 15 kata
            return $item;
        });

        $userId = auth()->id();
        
        $haveApplied = Lamaran::all();

        $haveApplied = $haveApplied->sortBy(function ($item) {
            return $item->status === 'Diterima' ? 0 : 1;
        });

        return view('user.page.vacancy', compact('latestVacancy', 'searchVacancy'), [
            "title" => "Lowongan",
            "haveApplied" => $haveApplied,
        ]);
    }

    public function detailVacancy($id)
    {
        $detailVacancy = Lowongan::findOrFail($id);

        $haveApplied = Lamaran::all();

        $haveApplied = Lamaran::where('lowongan_id', $id)->get();

        return view('user.page.detailVacancy', compact('detailVacancy'), [
            "title" => "Detail Lowongan",
            "haveApplied" => $haveApplied,
        ]);
    }

    public function storeApplication(Request $request)
    {   
        $request->validate(Lamaran::$rules);

        /* dd($request->all()); */
    
        try {
            $application = new Lamaran($request->all());
    
            // Mengambil data pengguna yang sedang login
            $user = auth()->user()->id;
            $lowonganId = request()->input('lowongan_id');
    
            // Menyimpan data pengguna
            $application->mahasiswa_id = $user;
            $application->lowongan_id = $lowonganId;
            $application->status = 'Diterima';

            // Handle riwayat file
            if ($request->hasFile('dokumen_riwayat') && $request->file('dokumen_riwayat')->isValid()) {
                $dokumenRiwayatFile = $request->file('dokumen_riwayat');
                $dokumenRiwayatFileName = 'dokumen_riwayat_' . time() . '.' . $dokumenRiwayatFile->getClientOriginalExtension();
                $dokumenRiwayatFile->move(public_path('uploads/lamaran/'), $dokumenRiwayatFileName);
                $application->dokumen_riwayat = $dokumenRiwayatFileName;
            }
            // Handle transkrip file
            if ($request->hasFile('dokumen_transkrip') && $request->file('dokumen_transkrip')->isValid()) {
                $dokumenTranskripFile = $request->file('dokumen_transkrip');
                $dokumenTranskripFileName = 'dokumen_transkrip_' . time() . '.' . $dokumenTranskripFile->getClientOriginalExtension();
                $dokumenTranskripFile->move(public_path('uploads/lamaran/'), $dokumenTranskripFileName);
                $application->dokumen_transkrip = $dokumenTranskripFileName;
            }
            // Handle lamaran file
            if ($request->hasFile('dokumen_lamaran') && $request->file('dokumen_lamaran')->isValid()) {
                $dokumenLamaranFile = $request->file('dokumen_lamaran');
                $dokumenLamaranFileName = 'dokumen_lamaran_' . time() . '.' . $dokumenLamaranFile->getClientOriginalExtension();
                $dokumenLamaranFile->move(public_path('uploads/lamaran/'), $dokumenLamaranFileName);
                $application->dokumen_lamaran = $dokumenLamaranFileName;
            }
            // Handle tambahan file
            if ($request->hasFile('dokumen_tambahan') && $request->file('dokumen_tambahan')->isValid()) {
                $dokumenTambahanFile = $request->file('dokumen_tambahan');
                $dokumenTambahanFileName = 'dokumen_tambahan_' . time() . '.' . $dokumenTambahanFile->getClientOriginalExtension();
                $dokumenTambahanFile->move(public_path('uploads/lamaran/'), $dokumenTambahanFileName);
                $application->dokumen_tambahan = $dokumenTambahanFileName;
            }
    
            // Handle poster file
            $application->save();
    
            $request->session()->flash('success', 'Berhasil menambahkan.');
            return redirect()->route('user.page.detailVacancy', $lowonganId)->with('success', 'Data berhasil disimpan.');
    
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Gagal menambahkan.');
            $request->session()->flash('error-details', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
    
}
