@extends('admin.layout.master')

@section('title')
    Kategori Pelatihan
@endsection

@push('after-style')
<link href="{{ asset('') }}assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endpush

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
            <div class="btn-group">
                <a href="{{ route('kategoripelatihans.create') }}" class="btn btn-primary">Tambah Data @yield('title')</a>
                
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    
    <h6 class="mb-0 text-uppercase">DataTable @yield('title')</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kategoriPelatihan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td class="flex gap-[10px]">
                                    <a href="{{ route('kategoripelatihans.edit', $item->id) }}" class="text-white px-[10px] py-[5px] bg-blue-500 rounded-lg">Edit</a>
                                    <form action="{{ route('kategoripelatihans.destroy', $item->id) }}" method="POST">
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
    <script src="{{ asset('') }}assets/js/jquery.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{ asset('') }}assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );
     
        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>
@endpush
