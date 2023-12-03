@extends('admin.layout.master')

@section('content')
    <div class="">
        <div>
            <div href="#" class=" flex mx-auto justify-end mb-[10px]">
                <a href="{{ route('akun.create') }}" class="bg-blue-500 text-white px-[10px] py-[5px] font-semibold rounded-lg">
                    Tambah Data
                </a>
            </div>
            <form action="{{ route('akun.index') }}" method="GET">
                <input type="text" name="keyword" placeholder="Cari Mahasiswa">
                <button type="submit">Cari</button>
            </form>

            <table>
                <thead>
                    <tr class="border">
                        <td class="border px-[20px] py-[10px]">
                            No
                        </td>
                        <td class="border px-[20px] py-[10px]">
                            Nama
                        </td>
                        <td class="border px-[20px] py-[10px]">
                            Email
                        </td>
                        <td class="border px-[20px] py-[10px]">
                            No HP
                        </td>
                        <td class="border px-[20px] py-[10px]">
                            Action
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($user as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mahasiswa->name }}</td>
                            <td>{{ $mahasiswa->email }}</td>
                            <td>{{ $mahasiswa->phone }}</td>
                            <td>
                                
                                <a href="{{ route('akun.show', $mahasiswa->id) }}" class="text-white px-[10px] py-[5px] bg-blue-500 rounded-lg">Lihat</a>
                                <a href="{{ route('akun.edit', $mahasiswa->id) }}" class="text-white px-[10px] py-[5px] bg-blue-500 rounded-lg">Edit</a>
                                <form action="{{ route('akun.destroy', $mahasiswa->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white px-[10px] py-[5px] bg-red-500 rounded-lg" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div>
                            Data Kosong
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection