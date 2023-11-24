@extends('admin.layout.master')

@section('title')
    Lowongan
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
                        <a href="{{ route('lowongans.create') }}" class="btn btn-primary">Tambah Data @yield('title')</a>
                       
                       
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
            $('#example').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('lowongans.index') }}',

                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'kategorilowongan.kategori',
                        name: 'kategorilowongan.kategori'
                    },
                    {
                        data: 'user.name',
                        name: 'user.name'
                    },
                    {
                        data: 'nama_perusahaan',
                        name: 'nama_perusahaan'
                    },
                    {
                        data: 'title_pekerjaan',
                        name: 'title_pekerjaan'
                    },
                    {
                        data: 'syarat_pekerjaan',
                        name: 'syarat_pekerjaan'
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
