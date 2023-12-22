@extends('admin.layout.master')

@section('title')
Edit Lowongan Pekerjaan
@endsection

@section('content')
<div class="row row-deck row-cards">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <h6 class="mb-0 text-uppercase"> Form @yield('title')</h6>
                        <hr/>
                        <div class="card border-top border-4 border-info">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                        </div>
                                        <h5 class="mb-0 text-info">@yield('title') Data</h5>
                                    </div>
                                    <hr/>
                
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Kategori Lowongan</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" id="role" name="kategori_lowongan_id" disabled>
                                                @foreach($kategori as $r)
                                                    <option value="{{ $r->id }}">{{ $r->kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                
                                    <div class="row mb-3">
                                        <h4 class="mb-4">Nama Perusahaan</h4>
                                        <input type="text" class="form-control"  placeholder="Masukan Nama Perusahaan" name="nama_perusahaan" value="{{ $lowongan->nama_perusahaan ?? '' }}" disabled>
                                    </div>
                
                                    <div class="row mb-3">
                                        <h4 class="mb-4">Nama Pekerjaan</h4>
                                        <input type="text" class="form-control"  placeholder="Masukan Nama Pekerjaan" name="title_pekerjaan" value="{{ $lowongan->title_pekerjaan ?? '' }}" disabled>
                                    </div>
                
                                
                
                                    <div class="row mb-3">
                                    <h4 class="mb-4">Deskripsi Pekerjaan</h4>
                                            <textarea id="mytextarea" name="deskripsi_pekerjaan" disabled>{{ $lowongan->deskripsi_pekerjaan ?? '' }}</textarea>
                                    </div>
                
                                    <div class="row mb-3">
                                        <h4 class="mb-4">Syarat Pekerjaan</h4>
                                        <input type="text" class="form-control"  placeholder="Masukan Syarat Pekerjaan" name="syarat_pekerjaan" value="{{ $lowongan->syarat_pekerjaan ?? '' }}" disabled>
                                    </div>
                
                                    <div class="row mb-3">
                                        <h4 class="mb-4">Kompetensi Pekerjaan</h4>
                                        <input type="text" class="form-control"  placeholder="Masukan Kompetensi pekerjaan" name="kompetensi_pekerjaan" value="{{ $lowongan->kompetensi_pekerjaan ?? '' }}" disabled>
                                    </div>
                
                                    <div class="row mb-3">
                                        <h4 class="mb-4">Kota Pekerjaan</h4>
                                        <input type="text" class="form-control"  placeholder="Masukan Kota pekerjaan" name="kota" value="{{ $lowongan->kota ?? '' }}" disabled>
                                    </div>
                
                                    <div class="row mb-3">
                                        <div class="col-xl-12 mx-auto">
                                            <h6 class="mb-0 text-uppercase">Logo</h6>
                                            <hr/>
                                                @if($lowongan->logo ?? '')
                                                <img src="{{ asset('') }}uploads/{{ $lowongan->logo }}" alt="blog image">
                                                @else
                                                    {{-- <img src="https://placehold.co/250x250" class="img-fluid" alt=""> --}}
                                                @endif
                                            
                                        </div>
                                    </div>
                
                                    
                
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-xl-12">
                                            <a href="{{ url('admin/lowongans') }}" class="btn btn-info px-5">Kembali Lowongan View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('after-script')

        
@endpush

