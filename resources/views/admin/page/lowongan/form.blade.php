<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0"> Form Lowongan</h6>
        <hr/>
        <div class="card border-top border-4 border-primary">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">Data Lowongan</h5>
                    </div>
                    <hr/>

                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label"><h6>Kategori Lowongan</h6></label>
                        <div class="col-sm-9">
                            <select class="form-select" id="role" name="kategori_lowongan_id">
                                @if(isset($lowongan) && count($kategori) > 0)
                                    @foreach($kategori as $r)
                                        <option value="{{ $r->id }}" @if(isset($lowongan) && $lowongan->kategori_lowongan_id == $r->id) selected @endif>{{ $r->kategori }}</option>
                                    @endforeach
                                @else
                                @foreach($kategori as $r)
                                    <option value="{{ $r->id }}">{{ $r->kategori }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">Nama Perusahaan</h4>
                        <input type="text" class="form-control"  placeholder="Masukan Nama Perusahaan" name="nama_perusahaan" value="{{ $lowongan->nama_perusahaan ?? '' }}">
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">Nama Pekerjaan</h4>
                        <input type="text" class="form-control"  placeholder="Masukan Nama Pekerjaan" name="title_pekerjaan" value="{{ $lowongan->title_pekerjaan ?? '' }}">
                    </div>

                

                    <div class="row mb-3">
                    <h4 class="mb-4">Deskripsi Pekerjaan</h4>
							<textarea id="mytextarea" name="deskripsi_pekerjaan">{{ $lowongan->deskripsi_pekerjaan ?? '' }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">Syarat Pekerjaan</h4>
                      
                        <textarea id="mytextarea2" name="syarat_pekerjaan">{{ $lowongan->syarat_pekerjaan ?? '' }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">Kompetensi Pekerjaan</h4>
                        <textarea id="mytextarea3" name="kompetensi_pekerjaan">{{ $lowongan->kompetensi_pekerjaan ?? '' }}</textarea>
                        
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">Kota Pekerjaan</h4>
                        <input type="text" class="form-control"  placeholder="Masukan Kota pekerjaan" name="kota" value="{{ $lowongan->kota ?? '' }}">
                    </div>

                    <div class="row mb-3">
                        <div class="col-xl-12 mx-auto">
                            <h4 class="mt-4">Logo Perusahaan (File JPG atau PNG maks 2MB)</h4>
                            <hr/>
                            <div class="card">
                                <div class="card-body">                      
                                        <input  type="file" name="logo" >
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-xl-12">
                            <button type="submit" class="btn btn-primary px-5">Simpan </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>