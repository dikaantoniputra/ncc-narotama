<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function show(Lamaran $lamaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Lamaran $lamaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lamaran $lamaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lamaran $lamaran)
    {
        //
    }
}
