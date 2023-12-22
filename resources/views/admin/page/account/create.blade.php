@extends('admin.layout.master')

@section('content')
    <div>
        Buat Akun Mahasiswa
    </div>
    
    @if ($errors->any())
        <div>
            <div class="text-red-500">
                Input Gagal
            </div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h6 class="mb-0 text-uppercase">Form Mahasiswa</h6>
                <hr/>
                <div class="card border-top border-4 border-info">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">Tambah Data Mahasiswa</h5>
                            </div>
                            <hr/>
        
        
                            <div class="row mb-3">
                                <h4 class="mb-4">UserName</h4>
                                <input type="text" class="form-control"  placeholder="Masukan Nama UserName" name="username" value="{{ $mahasiswa->username ?? '' }}">
                            </div>
        
                            <div class="row mb-3">
                                <h4 class="mb-4">Password</h4>
                                <input type="text" class="form-control"  placeholder="Masukan Nama Password" name="password" value="{{ $lowongan->password ?? '' }}">
                            </div>

                            <div class="row mb-3">
                                <h4 class="mb-4">Nama Siswa</h4>
                                <input type="text" class="form-control"  placeholder="Masukan Nama Siswa" name="name" value="{{ $lowongan->name ?? '' }}">
                            </div>

                            <div class="row mb-3">
                                <h4 class="mb-4">Email</h4>
                                <input type="email" class="form-control"  placeholder="Masukan Nama Pekerjaan" name="email" value="{{ $lowongan->email ?? '' }}">
                            </div>

                            <div class="row mb-3">
                                <h4 class="mb-4">Telepon</h4>
                                <input type="text" class="form-control" id="phone" placeholder="Masukan Nama Pekerjaan" name="phone"  value="{{ $lowongan->phone ?? '' }}">
                            </div>

                            <div class="row mb-3">
                                <input type="hidden" class="form-control"  placeholder="Masukan Nama Pekerjaan" name="role" value="mahasiswa">
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-select" id="role" name="status">
                                            <option value="0">Aktiv</option>
                                            <option value="1">Non Aktiv</option>
                                    </select>
                                </div>
                            </div>
                                                
        
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-xl-12">
                                    <button type="submit" class="btn btn-info px-5">Tambah Mahasiswa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </form> 
@endsection