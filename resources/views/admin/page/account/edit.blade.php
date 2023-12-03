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

    <form action="{{ route('akun.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <div>
                username
            </div>
            <input type="text" name="username" id="username" value="{{$user->username}}">
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
            <input type="text" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div>
            <div>
                Email
            </div>
            <input type="text" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div>
            <div>
                Telepon
            </div>
            <input type="text" name="phone" id="phone" value="{{ $user->phone }}">
        </div>
        <div>
            <div>
                Role
            </div>
            <input type="text" name="role" id="role" value="{{ $user->role }}">
        </div>
        <div>
            <div>
                Status
            </div>
            <input type="text" name="status" id="status" value="{{ $user->status }}">
        </div>

        <button type="submit" class="text-white bg-blue-500 rounded-lg px-[10px] py-[5px]">Submit</button>
    </form> 
@endsection