<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Horizontal Form Materi</h6>
        <hr/>
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">@yield('title') Registration</h5>
                    </div>
                    <hr/>

                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Kategori Pelajaran</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="role" name="kategori_pelatihan_id">
                                @foreach($kategori as $r)
                                    <option value="{{ $r->id }}">{{ $r->kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">nama_pelatihan</h4>
                        <input type="text" class="form-control"  placeholder="Enter Your Pendidikan" name="nama_pelatihan" value="{{ $pelatihan->nama_pelatihan ?? '' }}">
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">nama_penyelenggara</h4>
                        <input type="text" class="form-control"  placeholder="Enter Your Pendidikan" name="nama_penyelenggara" value="{{ $pelatihan->nama_penyelenggara ?? '' }}">
                    </div>

                

                    <div class="row mb-3">
                    <h4 class="mb-4">deskripsi</h4>
							<textarea id="mytextarea" name="deskripsi">{{ $pelatihan->deskripsi ?? '' }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-xl-12 mx-auto">
                            <h6 class="mb-0 text-uppercase">dokumentasi_pelatihan</h6>
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
                            <h6 class="mb-0 text-uppercase">poster</h6>
                            <hr/>
                            <div class="card">
                                <div class="card-body">                      
                                        <input  type="file" name="poster" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">max_peserta</h4>
                        <input type="number" class="form-control"  placeholder="Enter Your Pendidikan" name="max_peserta" value="{{ $pelatihan->max_peserta ?? '' }}">
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
                            <button type="submit" class="btn btn-info px-5">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>