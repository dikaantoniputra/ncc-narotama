@extends('admin.layout.master')

@section('title')
    Pelatihan
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables @yield('title')</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data @yield('title')</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                @if (Auth::user()->role == 'admin')
                    <div class="btn-group">
                        <a href="{{ route('pelatihans.create') }}" class="btn btn-primary">Tambah Data @yield('title')</a>
                       
                       
                    </div>
                @endif
            </div>
        </div>
        <!--end breadcrumb-->

        <h6 class="mb-0 text-uppercase">DataTable @yield('title')</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kategori</th>
                                <th>User</th>
                                <th>Judul</th>
                                <th>Nama Penyelenggara</th>
                                <th>Max Peserta</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataPelatihan as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->kategoripelatihan->kategori }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->nama_pelatihan }}</td>
                                    <td>{{ $item->nama_penyelenggara }}</td>
                                    <td>{{ $item->max_peserta }}</td>
                                    <td class="flex gap-[10px]">
                                        <a href="{{ route('pelatihans.show', $item->id) }}" class="text-white px-[10px] py-[5px] bg-green-500 rounded-lg">Lihat</a>
                                        <a href="{{ route('pelatihans.edit', $item->id) }}" class="text-white px-[10px] py-[5px] bg-blue-500 rounded-lg">Edit</a>
                                        <form action="{{ route('pelatihans.destroy', $item->id) }}" method="POST">
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
        </div>

    </div>
@endsection



@push('after-script')
    <script>
      


        $(document).ready(function() {
            $('pelatihan').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('pelatihans.index') }}',

                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'kategoripelatihan.kategori',
                        name: 'kategoripelatihan.kategori'
                    },
                    {
                        data: 'user.name',
                        name: 'user.name'
                    },
                    {
                        data: 'nama_pelatihan',
                        name: 'nama_pelatihan'
                    },
                    {
                        data: 'nama_penyelenggara',
                        name: 'nama_penyelenggara'
                    },
                    {
                        data: 'max_peserta',
                        name: 'max_peserta'
                    },
                  
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                 

                ]
            });
        });
    </script>
@endpush
