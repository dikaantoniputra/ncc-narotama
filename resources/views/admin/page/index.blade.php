@extends('admin.layout.master')

@section('content')

<div class="card radius-10">
    <div class="card-content">
        <div class="row row-group row-cols-1 row-cols-xl-4 ">
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Admin</p>
                            <h4 class="mb-0 text-primary">{{ $admin ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-primary"></i>
                            {{-- bx bx-cart --}}
                         
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%"></div>
                    </div>        
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Mahasiswa</p>
                            <h4 class="mb-0 text-danger">{{ $mahasiswa ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-group font-35 text-danger"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Berita</p>
                            <h4 class="mb-0 text-success">{{ $berita ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-group font-35 text-success"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total K-Pelatihan</p>
                            <h4 class="mb-0 text-warning">{{ $kategoripelatihan ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>

            <div class="col pt-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total K-Lowongan</p>
                            <h4 class="mb-0 text-warning">{{ $kategorilowongan ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>
            <div class="col pt-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Lowongan</p>
                            <h4 class="mb-0 text-warning">{{ $lowongan ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>

            <div class="col pt-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Pelatihan</p>
                            <h4 class="mb-0 text-warning">{{ $pelatihan ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>

            <div class="col pt-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Lamaran</p>
                            <h4 class="mb-0 text-warning">{{ $lamaran ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>

            <div class="col pt-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Peserta Pelatihan</p>
                            <h4 class="mb-0 text-warning">{{ $peserta ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>
            
        </div>
        
    </div>
</div>


@endsection