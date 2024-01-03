<div class="row">
    <div class="col-xl-12 mx-auto">
    <h6 class="mb-0">Form Berita</h6>
        <hr/>
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">  @yield('title') Berita</h5>
                    </div>
                    <hr/>

                    <div class="row mb-3">
                        <h4 class="mb-4">Judul Berita</h4>
                            <input type="text" class="form-control"  placeholder="Masukkan Judul Berita" name="judul" value="{{ $berita->judul ?? '' }}">
                        
                    </div>

                    <div class="row mb-3">
                    <h4 class="mb-4">Isi Berita</h4>
							<textarea id="mytextarea" name="isi">{{ $berita->isi ?? '' }}</textarea>
                    </div> 

                                            @if($berita->cover ?? '')
                                                    <img src="{{ asset('') }}uploads/{{ $berita->cover }}" alt="blog image">
                                                @else
                                                    {{-- <img src="https://placehold.co/250x250" class="img-fluid" alt=""> --}}
                                                @endif
                    <div class="row mb-3">
                        <div class="col-xl-12 mx-auto">
                            <h4 class="mt-4">Cover Berita (File JPG atau PNG maks 2MB)</h4>
                            <hr/>
                            <div class="card">
                                <div class="card-body">
                                   
                                        <input  type="file" name="cover" >

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                                   
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-xl-12">
                            <button type="submit" class="btn btn-primary px-5">Simpan @yield('title')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>