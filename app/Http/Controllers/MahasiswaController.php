<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $user = User::all();

        $keyword = $request->input('keyword');

        $user = User::when($keyword, function($query) use ($keyword) {
            $query->where('name', 'like', '%'.$keyword.'%')
                ->orWhere('username', 'like', '%'.$keyword.'%');
        })->paginate(10);

        return view('admin.page.account.index', compact('user'), ["title" => "Akun Mahasiswa"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.account.create', ["title" => "Buat Akun Mahasiswa"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'status' => 'required',
       ]);

       $hashedPassword  = Hash::make($request->password);

       //Simpan pengguna kedalam database
       $user = User::create([
            'username' => $request->username,
            'password' => $hashedPassword,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'status' => $request->status,
       ]);

       $mahasiswa = Mahasiswa::create([
            'user_id' => $user->id,
       ]);

       return redirect()->route('akun.index')->with('success', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {   
        $user = User::findOrFail($userId);
        $mahasiswa = Mahasiswa::where('user_id', $userId)->first();

        return view('admin.page.account.show', compact('user', 'mahasiswa'), ["title" => "Lihat Akun Mahasiswa"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($userId)
    {
        $user = User::findOrFail($userId);
        $mahasiswa = Mahasiswa::where('user_id', $userId)->first(); // Mengambil data Mahasiswa yang terkait dengan User

        return view('admin.page.account.edit', compact('user', 'mahasiswa'), ["title" => "Edit Akun Mahasiswa"]);
    }

    public function update(Request $request, $userId)
    {
        // Validasi request

        $user = User::findOrFail($userId);
        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        $mahasiswa = Mahasiswa::where('user_id', $userId)->first();
        $mahasiswa->update([
            // Update data Mahasiswa jika diperlukan
        ]);

        return redirect()->route('akun.index')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId)
    {
        $user = User::findOrFail($userId);

        // Hapus data terkait dari tabel Mahasiswa sebelum menghapus User
        $user->mahasiswa()->delete();

        // Hapus User
        $user->delete();

        return redirect()->route('akun.index')->with('success', 'Data Berhasil Dihapus');
    }
}
