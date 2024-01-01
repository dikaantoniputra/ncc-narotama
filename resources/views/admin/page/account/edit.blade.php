@extends('admin.layout.master')

@section('content')
    <div>
        Edit Akun Mahasiswa
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

    <form action="{{ route('mahasiswa.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h6 class="mb-0 text-uppercase"> Form Edit Mahasisa</h6>
                <hr/>
                <div class="card border-top border-4 border-info">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">Edit Data Mahasiswa</h5>
                            </div>
                            <hr/>
        
        
                            <div class="row mb-3">
                                <h4 class="mb-4">Username</h4>
                                <input type="text" class="form-control"  placeholder="Masukan UserName" name="username" value="{{ $user->username ?? '' }}">
                            </div>
        
                            <div class="row mb-3">
                                <h4 class="mb-4">Password</h4>
                                <input type="text" class="form-control"  placeholder="Masukan Password" name="password" value="{{ $user->password ?? '' }}">
                            </div>

                            <div class="row mb-3">
                                <h4 class="mb-4">Nama</h4>
                                <input type="text" class="form-control"  placeholder="Masukan Nama" name="name" value="{{ $user->name ?? '' }}">
                            </div>

                            <div class="row mb-3">
                                <h4 class="mb-4">Email</h4>
                                <input type="email" class="form-control"  placeholder="Masukan Email" name="email" value="{{ $user->email ?? '' }}">
                            </div>

                            <div class="row mb-3">
                                <h4 class="mb-4">No.Telepon</h4>
                                <input type="text" class="form-control" id="phone" placeholder="Masukan Telepon" name="phone"  value="{{ $user->phone ?? '' }}">
                            </div>

                            <div class="row mb-3">
                                <input type="hidden" class="form-control"  placeholder="Masukan Nama Pekerjaan" name="role" value="mahasiswa">
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-select" id="role" name="status" >
                                        <option value="0" @if($user->status == 0) selected @endif>Aktif</option>
                                        <option value="1" @if($user->status == 1) selected @endif>Non Aktif</option>
                                    </select>
                                </div>
                            </div>
                            
                                                
        
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-xl-12">
                                    <button type="submit" class="btn btn-info px-5">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form> 
@endsection