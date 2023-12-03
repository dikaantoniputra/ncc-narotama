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

    <form action="{{ route('akun.store') }}" method="POST">
        @csrf

        <div>
            <div>
                username
            </div>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <div>
                password
            </div>
            <input type="text" name="password" id="password">
        </div>
        <div>
            <div>
                Nama
            </div>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <div>
                Email
            </div>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <div>
                Telepon
            </div>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <div>
                Role
            </div>
            <input type="text" name="role" id="role">
        </div>
        <div>
            <div>
                Status
            </div>
            <input type="text" name="status" id="status">
        </div>

        <button type="submit" class="text-white bg-blue-500 rounded-lg px-[10px] py-[5px]">Submit</button>
    </form> 
@endsection