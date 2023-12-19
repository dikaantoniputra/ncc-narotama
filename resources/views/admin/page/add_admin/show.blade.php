@extends('admin.layout.master')

@section('content')
    <div>
        Lihat Akun Mahasiswa
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
        <div>
            <div>
                username
            </div>
            <div>{{ $user->username }}</div>
        </div>
        <div>
            <div>
                Nama
            </div>
            <div>{{ $user->name }}</div>
        </div>
        <div>
            <div>
                Email
            </div>
            <div>{{ $user->email }}</div>
        </div>
        <div>
            <div>
                Telepon
            </div>
            <div>{{ $user->phone }}</div>
        </div>
        <div>
            <div>
                Role
            </div>
            <div>{{ $user->role }}</div>
        </div>
        <div>
            <div>
                Status
            </div>
            <div>{{ $user->status }}</div>
        </div>
@endsection