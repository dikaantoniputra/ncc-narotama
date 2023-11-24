@extends('admin.layout.master')

@section('title')
    Kategori Lowongan
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
            <div class="btn-group">
                <a href="{{ route('kategorilowongans.create') }}" class="btn btn-primary">Tambah Data @yield('title')</a>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    
    <h6 class="mb-0 text-uppercase">DataTable @yield('title')</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pendidikan</th>
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
    // $(document).ready(function() {
    //     $('#example').DataTable();
    //   } );

// lek onok datae
$(document).ready(function() {
    $('#example').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '{{ route('kategorilowongans.index') }}',
        
    },
    columns: [
            {data: 'id', name: 'id'}, 
            {data: 'kategori', name: 'kategori'},     
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ] 
    });
});

</script>

@endpush
