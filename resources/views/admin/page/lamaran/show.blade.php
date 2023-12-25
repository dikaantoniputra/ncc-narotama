@extends('admin.layout.master')

@section('title')
    Peserta Lowongan
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
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($lowongan->lamaran as $item)
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
                                    <td>
                                        <div class="col">
                                            <div class="dropdown">
                                                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Berkas Lamaran</button>
                                                <ul class="dropdown-menu" id="myDropdown">
                                                    <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">Dokumen Riwayat</button></li>
                                                    <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal2">Dokumen Lamaran</button></li>
                                                    <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal3">Dokumen Transkrip</button></li>
                                                    <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal4">Dokumen Tambahan</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                      
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


    <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dokumen Riwayat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     @if ($item->dokumen_riwayat)
                                        @php
                                            $fileExtension = pathinfo($item->dokumen_riwayat, PATHINFO_EXTENSION);
                                        @endphp
                                    
                                        @if ($fileExtension == 'pdf')
                                            <embed src="{{ asset('uploads/lamaran/' . $item->dokumen_riwayat) }}" type="application/pdf" width="100%" height="600px" />
                                        @elseif (in_array($fileExtension, ['doc', 'docx']))
                                            <iframe src="https://docs.google.com/gview?url={{ asset($item->dokumen_riwayat) }}&embedded=true" style="width:100%; height:600px;" frameborder="0"></iframe>
                                        @else
                                            <p>This file format is not supported for embedding.</p>
                                        @endif
                                        @else
                                            <p>No document available.</p>
                                        @endif
                                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleVerticallycenteredModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dokumen Lamaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($item->dokumen_lamaran)
                                        @php
                                            $fileExtension = pathinfo($item->dokumen_lamaran, PATHINFO_EXTENSION);
                                        @endphp
                                    
                                        @if ($fileExtension == 'pdf')
                                            <embed src="{{ asset('uploads/lamaran/' . $item->dokumen_lamaran) }}" type="application/pdf" width="100%" height="600px" />
                                        @elseif (in_array($fileExtension, ['doc', 'docx']))
                                            <iframe src="https://docs.google.com/gview?url={{ asset($item->dokumen_lamaran) }}&embedded=true" style="width:100%; height:600px;" frameborder="0"></iframe>
                                        @else
                                            <p>This file format is not supported for embedding.</p>
                                        @endif
                                        @else
                                            <p>No document available.</p>
                                        @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleVerticallycenteredModal3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dokumen Transkrip</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($item->dokumen_transkrip)
                    @php
                        $fileExtension = pathinfo($item->dokumen_transkrip, PATHINFO_EXTENSION);
                    @endphp
                
                    @if ($fileExtension == 'pdf')
                        <embed src="{{ asset('uploads/lamaran/' . $item->dokumen_transkrip) }}" type="application/pdf" width="100%" height="600px" />
                    @elseif (in_array($fileExtension, ['doc', 'docx']))
                        <iframe src="https://docs.google.com/gview?url={{ asset($item->dokumen_transkrip) }}&embedded=true" style="width:100%; height:600px;" frameborder="0"></iframe>
                    @else
                        <p>This file format is not supported for embedding.</p>
                    @endif
                    @else
                        <p>No document available.</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleVerticallycenteredModal4" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dokumen Tambahan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($item->dokumen_tambahan)
                    @php
                        $fileExtension = pathinfo($item->dokumen_tambahan, PATHINFO_EXTENSION);
                    @endphp
                
                    @if ($fileExtension == 'pdf')
                        <embed src="{{ asset('uploads/lamaran/' . $item->dokumen_tambahan) }}" type="application/pdf" width="100%" height="600px" />
                    @elseif (in_array($fileExtension, ['doc', 'docx']))
                        <iframe src="https://docs.google.com/gview?url={{ asset($item->dokumen_tambahan) }}&embedded=true" style="width:100%; height:600px;" frameborder="0"></iframe>
                    @else
                        <p>This file format is not supported for embedding.</p>
                    @endif
                    @else
                        <p>No document available.</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
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