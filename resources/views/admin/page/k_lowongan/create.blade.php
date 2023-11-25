@extends('admin.layout.master')

@section('title')
k lowongan
@endsection

@push('after-style')

@endpush

@section('content')
<div class="row row-deck row-cards">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('kategorilowongans.store') }}" id="form">
                    @csrf
                    @include('admin.page.k_pelatihan.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')

        
@endpush

