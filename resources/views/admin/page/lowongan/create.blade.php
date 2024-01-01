@extends('admin.layout.master')

@section('title')
Tambah Data Lowongan
@endsection

@push('after-style')

@endpush

@section('content')

<div class="row row-deck row-cards">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('lowongans.store') }}" id="form" enctype="multipart/form-data">
                    @csrf
                    @include('admin.page.lowongan.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')
<script>
    tinymce.init({
      selector: '#mytextarea2'
    });
</script>

<script>
    tinymce.init({
      selector: '#mytextarea3'
    });
</script>
<!--app JS-->
<!--app JS-->
@endpush

