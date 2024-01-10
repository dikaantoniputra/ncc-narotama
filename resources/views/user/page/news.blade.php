@extends('user.layout.master')

@section('content')
    {{-- Section - Hero --}}
    <section class="bg-white lg:pl-[80px] lg:pr-[80px] lg:pb-[80px] lg:pt-[60px] p-[40px]">

        <form action="{{ route('user.page.news') }}" method="GET">
            <div class="flex mx-auto justify-center px-[24px] py-[12px] bg-[#F7F7F7] lg:w-[626px] rounded-[6px] items-center">
                <!-- Search Input -->
                <input type="search" class="w-[554px] bg-[#F7F7F7] placeholder:text-[16px] placeholder:font-medium placeholder:text-[#ABABAB] focus:outline-none focus:ring-0 border-none" placeholder="Cari" name="judul">
                <!-- Search Icon -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 21L16.65 16.65" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
            </div>
        </form>


        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[60px] mt-[80px]">
            @if($latestNews->isNotEmpty())
            @php
                $firstNews = $latestNews->shift(); // Remove the first news from the collection
            @endphp
            <div>
                <img class="w-full h-full" src="{{ asset('uploads/' . $firstNews->cover) }}" alt="heroimage">
            </div>
            <div>
                <!-- Display the first news from latestNews -->
               
                    <div class="text-[16px] text-[#808080] font-medium">
                        {{ $firstNews->tanggal }} <!-- Assuming 'tanggal' is the attribute for the date -->
                    </div>
                    <a href="{{ route('user.page.detailNews', $firstNews->id) }}">
                        <div class="text-[#2C2C2C] text-[36px] font-semibold my-[20px]">
                            {{ $firstNews->judul }}
                        </div>
                     </a>
                    <!-- <div class="text-[#606060] text-[16px] font-medium">
                        {{ $firstNews->isi }}
                    </div> -->
                    <div class="text-[#606060] text-[16px] font-medium">
                            {{ mb_substr(strip_tags($firstNews->isi), 0, 450) }}
                    </div>
               
            </div>
            @endif
        </div>
    </section>
    
    {{-- Section - Berita Terbaru --}}
    <section class="bg-[#F7F7F7] lg:p-[80px] p-[40px]">
        <h1 class="text-[36px] text-black font-semibold lg:mb-[60px] mb-[30px]">Berita Terbaru</h1>
        {{-- Card Berita --}}
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-[28px]">
            @foreach($latestNews as $news)
                <div class="h-full bg-white rounded-[8px]">
                    <img src="{{ asset('uploads/' . $news->cover) }}" alt="{{ $news->judul }}" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-medium text-[#808080]">{{ $news->tanggal }}</div>
                        <a href="{{ route('user.page.detailNews', $news->id) }}" class="my-[8px] text-[#444] text-[20px] font-semibold hover:text-blue-600">{{ $news->judul }}</a>
                        <div class="text-[#606060] text-[16px] font-medium">
                            {{ strip_tags($news->isi) }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    

    {{-- Section - Berita Terbaru --}}
    <section class="bg-[#4176CF] lg:px-[80px] lg:py-[80px] py-[40px] px-[40px]">
        <div>
            <h1 class="lg:text-[36px] text-[30px] text-white font-semibold mb-[60px]">Semua Artikel Berita</h1>
        </div>
        {{-- Card Pelatihan - Baris 1 --}}
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-[28px] mt-[40px]">
            @forelse ($searchVacancy as $item)
                <div class="h-full bg-[#F7F7F7] rounded-[8px]">
                    <img src="{{ asset('uploads/' . $item->cover) }}" alt="Card Image {{ $item->judul }}" class="rounded-tl-[8px] rounded-tr-[8px] w-[408px] h-[212px]">
                    <div class="p-[20px]">
                        
                        <a href="{{ route('user.page.detailNews', $item->id) }}" class="my-[8px] text-[#444] text-[20px] font-semibold hover:text-blue-600">{{ $item->judul }}</a>
                        <div class="text-[#606060] text-[16px] font-medium">
                            {{ strip_tags($item->isi) }}
                        </div>
                    </div>
                </div>
            @empty
                <div>Mohon maaf, pelatihan saat ini belum tersedia</div>
            @endforelse
        </div>
        <div class="mt-[30px]">
            <div>
                {{ $searchVacancy->links() }}
            </div>
            <div class="text-white mt-[30px]">
                <div>Halaman : {{ $searchVacancy->currentPage() }}</div>
                <div>Jumlah Halaman : {{ $searchVacancy->total() }}</div>
                <div>Data Per Halaman : {{ $searchVacancy->perPage() }}</div>
            </div>
        </div>
    </section>
@endsection