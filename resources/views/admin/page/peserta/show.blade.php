@extends('admin.layout.master')

@section('title')
    Peserta Pelatihan
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
                @if (Auth::user()->role == 'admin')
                    <div class="btn-group">
                        <a href="{{ url('admin/peserta') }}" class="btn btn-primary">Kembali Data @yield('title')</a>
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
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status Pendaftar</th>
                                <th>Status Akun</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pelatihan->peserta as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user->name  }}</td>
                                    <td>{{ $item->user->email  }}</td>
                                    <td>{{ $item->user->phone  }}</td>
                                    <td>{{ $item->user->role  }}</td>
                                    <td>
                                        @if ($item->user && $item->user->status == 0)
                                            Active
                                        @elseif ($item->user && $item->user->status == 1)
                                            Not Active
                                        @else
                                            N/A
                                        @endif
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
    <script src="{{ asset('') }}../assets/js/jquery.min.js"></script>
	<script src="{{ asset('') }}../assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{ asset('') }}../assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{ asset('') }}../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{ asset('') }}../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{ asset('') }}../assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
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