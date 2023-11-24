@extends('admin.layout.master')

@section('title')
Edit Buku Pelajaran
@endsection

@section('content')
<div class="row row-deck row-cards">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('kategorilowongans.update', $kategoripelatihans) }}" id="form" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('admin.page.k_lowongan.form')
                </form>
            </div>
        </div>
    </div>

</div>
@endsection

@push('after-script')

        
@endpush

