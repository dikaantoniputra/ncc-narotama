<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $user = User::where('role', 'admin')->get();
        return view('admin.page.add_admin.index', compact('user'), ["title" => "Akun Mahasiswa"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.add_admin.create', ["title" => "Buat Akun Mahasiswa"]);
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

        Admin::create([
            'user_id' => $user->id,
       ]);

       return redirect()->route('admin.index')->with('success', 'Data Berhasil Dibuat');


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
        $mahasiswa = Admin::where('user_id', $userId)->first();

        return view('admin.page.add_admin.show', compact('user', 'mahasiswa'), ["title" => "Lihat Akun Mahasiswa"]);
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
        $admin = Admin::where('user_id', $userId)->first(); // Mengambil data Mahasiswa yang terkait dengan User

        return view('admin.page.add_admin.edit', compact('user', 'admin'), ["title" => "Edit Akun Mahasiswa"]);
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

        $admin = Admin::where('user_id', $userId)->first();
      

        return redirect()->route('admin.index')->with('success', 'Data Berhasil Di Edit');
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
        $user->admin()->delete();

        // Hapus User
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'Data Berhasil Dihapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        return view('admin.page.profile', compact('user'));
    }

    public function profileupdate(Request $request)
    {
        $user = User::find(Auth::id()); // Mencari user yang sedang login
       
        if ($user) {
            
            $user->update($request->all());

            return redirect()->back()->with('success', 'Profile has been updated!');
        } else {
         
            $user->profile()->create($request->all());

            return redirect()->back()->with('success', 'Profile has been created!');
        }
    }


    public function showPasswordForm()
    {
        return view('admin.page.password');
    }


    public function updatePassword(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
    
        // Check if the old password matches the user's current password
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'Password Lama Salah');
        }
    
        // Update the user's password
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);
    
        // Show success message
        Session::flash('success', 'Password berhasil diubah.');

        // dd(session('success'));
    
        return redirect()->route('profile.password');
    }
}
