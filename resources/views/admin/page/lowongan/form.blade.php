<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Horizontal Form Materi</h6>
        <hr/>
        <div class="card border-top border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">Tambah Data Lowongan</h5>
                    </div>
                    <hr/>

                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Kategori Lowongan</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="role" name="kategori_lowongan_id">
                                @foreach($kategori as $r)
                                    <option value="{{ $r->id }}">{{ $r->kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">nama_perusahaan</h4>
                        <input type="text" class="form-control"  placeholder="Masukan Nama Perusahaan" name="nama_perusahaan" value="{{ $lowongan->nama_perusahaan ?? '' }}">
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">title_pekerjaan</h4>
                        <input type="text" class="form-control"  placeholder="Masukan Nama Pekerjaan" name="title_pekerjaan" value="{{ $lowongan->title_pekerjaan ?? '' }}">
                    </div>

                

                    <div class="row mb-3">
                    <h4 class="mb-4">deskripsi_pekerjaan</h4>
							<textarea id="mytextarea" name="deskripsi_pekerjaan">{{ $lowongan->deskripsi_pekerjaan ?? '' }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">syarat_pekerjaan</h4>
                        <input type="text" class="form-control"  placeholder="Masukan Syarat Pekerjaan" name="syarat_pekerjaan" value="{{ $lowongan->syarat_pekerjaan ?? '' }}">
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">kompetensi_pekerjaan</h4>
                        <input type="text" class="form-control"  placeholder="Masukan Kompetensi pekerjaan" name="kompetensi_pekerjaan" value="{{ $lowongan->kompetensi_pekerjaan ?? '' }}">
                    </div>

                    <div class="row mb-3">
                        <h4 class="mb-4">kota_pekerjaan</h4>
                        <input type="text" class="form-control"  placeholder="Masukan Kota pekerjaan" name="kota" value="{{ $lowongan->kota ?? '' }}">
                    </div>

                    <div class="row mb-3">
                        <div class="col-xl-12 mx-auto">
                            <h6 class="mb-0 text-uppercase">logo</h6>
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
                            <button type="submit" class="btn btn-info px-5">Tambah Lowongan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>