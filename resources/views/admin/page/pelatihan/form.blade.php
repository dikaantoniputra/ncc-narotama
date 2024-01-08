<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0">Form Pelatihan</h6>
        <hr/>
        <div class="card border-top border-4 border-primary">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">Data Pelatihan</h5>
                    </div>
                    <hr/>

                    <div class="row mb-3">
                        <label for="inputKategori" class="col-sm-3 col-form-label"><h6>Kategori Pelatihan</h6></label>
                        <div class="col-sm-9">
                            <select class="form-select" id="role" name="kategori_pelatihan_id">
                                @if(isset($pelatihan) && count($kategori) > 0)
                                    @foreach($kategori as $r)
                                        <option value="{{ $r->id }}" @if(isset($pelatihan) && $pelatihan->kategori_pelatihan_id == $r->id) selected @endif>{{ $r->kategori }}</option>
                                    @endforeach
                                @else
                                @foreach($kategori as $r)
                                    <option value="{{ $r->id }}">{{ $r->kategori }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    
                    

                    <div class="row mb-3">
                        <h4 class="mb-4">Nama Pelatihan</h4>
                        <input type="text" class="form-control"  placeholder="Masukkan Nama Pelatihan" name="nama_pelatihan" value="{{ $pelatihan->nama_pelatihan ?? '' }}">
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">Nama Penyelenggara</h4>
                        <input type="text" class="form-control"  placeholder="Masukkan Nama Penyelenggara" name="nama_penyelenggara" value="{{ $pelatihan->nama_penyelenggara ?? '' }}">
                    </div>

                

                    <div class="row mb-3">
                    <h4 class="mb-4">Deskripsi</h4>
							<textarea id="mytextarea" name="deskripsi">{{ $pelatihan->deskripsi ?? '' }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-xl-12 mx-auto">
                            <h4 class="mt-4">Dokumentasi (File JPG atau PNG maks 2MB)</h4>
                            <hr/>
                            <div class="card">
                                <div class="card-body">                      
                                        <input  type="file" name="dokumentasi_pelatihan" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-xl-12 mx-auto">
                            <h4 class="mt-4">Poster (File JPG atau PNG maks 2MB)</h4>
                            <hr/>
                            <div class="card">
                                <div class="card-body">                      
                                        <input  type="file" name="poster" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">Max Peserta</h4>
                        <input type="number" class="form-control"  placeholder="Masukan Kuota Peserta" name="max_peserta" value="{{ $pelatihan->max_peserta ?? '' }}">
                    </div>


                    {{-- <div class="row mb-3">
                        <div class="col-xl-12 mx-auto">
                            <h6 class="mb-0 text-uppercase">File Materi</h6>
                            <hr/>
                            <div class="card">
                                <div class="card-body">
                                   
                                        <input id="image-uploadify" type="file" name="materi[]" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                        
                                        <!-- Tampilkan data file materi -->
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div> --}}
                          
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-xl-12">
                            <button type="submit" class="btn btn-primary px-5 text-white">Simpan </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>