<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0">Form Kategori Lowongan</h6>
        <hr/>
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">@yield('title') </h5>
                    </div>
                    <hr/>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Nama Kategori</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your Kategori Lowonongan" name="kategori" value="{{ $kategoripelatihans->kategori ?? '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary px-5">Simpan </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>