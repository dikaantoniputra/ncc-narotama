@extends('admin.layout.master')

@section('title')
View Berita
@endsection

@section('content')
<div class="row row-deck row-cards">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <h6 class="mb-0 text-uppercase">Form  @yield('title')</h6>
                        <hr/>
                        <div class="card border-top border-0 border-4 border-info">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                        </div>
                                        <h5 class="mb-0 text-info">@yield('title') </h5>
                                    </div>
                                    <hr/>
                
                                    <div class="row mb-3">
                                        <h4 class="mb-4">Judul</h4>
                                            <input type="text" class="form-control"  placeholder="Isi Judul Berita" name="judul" value="{{ $berita->judul ?? '' }}" disabled>
                                        
                                    </div>
                
                                    <div class="row mb-3">
                                    <h4 class="mb-4">Isi Berita</h4>
                                            <textarea id="mytextarea" name="isi" disabled>{!! $berita->isi !!}</textarea>
                                    </div> 
                
                                                            @if($berita->cover ?? '')
                                                                    <img src="{{ asset('') }}uploads/{{ $berita->cover }}" alt="blog image">
                                                                @else
                                                                    {{-- <img src="https://placehold.co/250x250" class="img-fluid" alt=""> --}}
                                                                @endif
                                 
                                    
                                                                   
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-xl-12">
                                            <a href="{{ url('admin/beritas') }}" class="btn btn-info px-5">Kembali</a>
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

