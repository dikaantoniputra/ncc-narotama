@extends('user.layout.master')

@section('content')
    {{-- Section - Hero --}}
    <section class="bg-[#F7F7F7] lg:pl-[80px] lg:pr-[80px] lg:pt-[60px] lg:pb-[80px] p-[40px]">
        <div class="text-[20px 20 Agustus 2023] text-[#2C2C2C] font-medium mb-[30px]">
           
        </div>
        <div class="text-[#2C2C2C] text-[44px] font-semibold mb-[60px]">
            {{ $detailNews->judul }}
        </div>
        <div>
            <img src="{{ asset('uploads/' . $detailNews->logo) }}" alt="contentImage">
        </div>
        <div class="my-[60px] text-[#606060] text-[16px] font-medium">
            {!! $detailNews->isi !!}
        </div>
    </section>
@endsection