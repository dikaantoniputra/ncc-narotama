@extends('user.layout.master')

@section('content')
    {{-- Section - Hero --}}
    <section class="bg-white lg:pl-[80px] lg:pr-[80px] lg:pb-[80px] lg:pt-[60px] p-[40px]">
        <div class="flex mx-auto justify-center px-[24px] py-[12px] bg-[#F7F7F7] lg:w-[626px] rounded-[6px] items-center">
            <input type="search" class="w-[554px] bg-[#F7F7F7] placeholder:text-[16px] placeholder:font-medium placeholder:text-[#ABABAB] focus:outline-none focus:ring-0 border-none" placeholder="Cari">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M21 21L16.65 16.65" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>                    
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[60px] mt-[80px]">
            <div>
                <img class="w-full h-full" src="assets/images/news-images/hero.png" alt="heroimage">
            </div>
            <div>
                <div class="text-[16px] text-[#808080] font-medium">
                    2 Februari 2024
                </div>
                <div class="text-[#2C2C2C] text-[36px] font-semibold my-[20px]">
                    Pelaksanaan Kegiatan DEVCLASS Web Developer BEM Fasilkom 2024
                </div>
                <div class="text-[#606060] text-[16px] font-medium">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna 
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>
    </section>
    {{-- Section - Berita Terbaru --}}
    <section class="bg-[#F7F7F7] lg:p-[80px] p-[40px]">
        <h1 class="text-[36px] text-black font-semibold lg:mb-[60px] mb-[30px]">Berita Terbaru</h1>
        {{-- Card Berita --}}
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-[28px]">
            <div class="h-full bg-white rounded-[8px]">
                <img src="assets/images/homepage-images/cards-image/news/card1.png" alt="card1" class="rounded-tl-[8px] rounded-tr-[8px]">
                <div class="p-[20px]">
                    <div class="text-[12px] font-medium text-[#808080]">Product CON 2023</div>
                    <div class="my-[8px] text-[#444] text-[20px] font-semibold">Narotama Job Fair 2023</div>
                    <div class="text-[#606060] text-[16px] font-medium text-justify">
                        Lorem ipsum dolor sit amet, 
                        consectetur adi piscing elit, 
                        sed eiusmod tempor incididunt ...
                    </div>
                </div>
            </div>
            <div class="h-full bg-white rounded-[8px]">
                <img src="assets/images/homepage-images/cards-image/news/card2.png" alt="card2" class="rounded-tl-[8px] rounded-tr-[8px]">
                <div class="p-[20px]">
                    <div class="text-[12px] font-medium text-[#808080]">Penyelenggaran Pelatihan UX Res ...</div>
                    <div class="my-[8px] text-[#444] text-[20px] font-semibold">Narotama Job Fair 2023</div>
                    <div class="text-[#606060] text-[16px] font-medium text-justify">
                        Lorem ipsum dolor sit amet, 
                        consectetur adi piscing elit, 
                        sed eiusmod tempor incididunt ...
                    </div>
                </div>
            </div>
            <div class="h-full bg-white rounded-[8px]">
                <img src="assets/images/homepage-images/cards-image/news/card3.png" alt="card3" class="rounded-tl-[8px] rounded-tr-[8px]">
                <div class="p-[20px]">
                    <div class="text-[12px] font-medium text-[#808080]">20 Agustus 2023</div>
                    <div class="my-[8px] text-[#444] text-[20px] font-semibold">Narotama Job Fair 2023</div>
                    <div class="text-[#606060] text-[16px] font-medium text-justify">
                        Lorem ipsum dolor sit amet, 
                        consectetur adi piscing elit, 
                        sed eiusmod tempor incididunt ...
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section - Berita Terbaru --}}
    <section class="bg-[#4176CF] lg:p-[80px] p-[40px]">
        <h1 class="text-[36px] text-white font-semibold lg:mb-[60px] mb-[30px]">Semua Berita</h1>
        {{-- Card Berita --}}
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-[28px]">
            {{-- Baris 1 --}}
            <div class="h-full bg-white rounded-[8px]">
                <img src="assets/images/homepage-images/cards-image/news/card1.png" alt="card1" class="rounded-tl-[8px] rounded-tr-[8px]">
                <div class="p-[20px]">
                    <div class="text-[12px] font-medium text-[#808080]">Product CON 2023</div>
                    <div class="my-[8px] text-[#444] text-[20px] font-semibold">Narotama Job Fair 2023</div>
                    <div class="text-[#606060] text-[16px] font-medium text-justify">
                        Lorem ipsum dolor sit amet, 
                        consectetur adi piscing elit, 
                        sed eiusmod tempor incididunt ...
                    </div>
                </div>
            </div>
            <div class="h-full bg-white rounded-[8px]">
                <img src="assets/images/homepage-images/cards-image/news/card2.png" alt="card2" class="rounded-tl-[8px] rounded-tr-[8px]">
                <div class="p-[20px]">
                    <div class="text-[12px] font-medium text-[#808080]">Penyelenggaran Pelatihan UX Res ...</div>
                    <div class="my-[8px] text-[#444] text-[20px] font-semibold">Narotama Job Fair 2023</div>
                    <div class="text-[#606060] text-[16px] font-medium text-justify">
                        Lorem ipsum dolor sit amet, 
                        consectetur adi piscing elit, 
                        sed eiusmod tempor incididunt ...
                    </div>
                </div>
            </div>
            <div class="h-full bg-white rounded-[8px]">
                <img src="assets/images/homepage-images/cards-image/news/card3.png" alt="card3" class="rounded-tl-[8px] rounded-tr-[8px]">
                <div class="p-[20px]">
                    <div class="text-[12px] font-medium text-[#808080]">20 Agustus 2023</div>
                    <div class="my-[8px] text-[#444] text-[20px] font-semibold">Narotama Job Fair 2023</div>
                    <div class="text-[#606060] text-[16px] font-medium text-justify">
                        Lorem ipsum dolor sit amet, 
                        consectetur adi piscing elit, 
                        sed eiusmod tempor incididunt ...
                    </div>
                </div>
            </div>

            {{-- Baris 2 --}}
            <div class="h-full bg-white rounded-[8px]">
                <img src="assets/images/homepage-images/cards-image/news/card1.png" alt="card1" class="rounded-tl-[8px] rounded-tr-[8px]">
                <div class="p-[20px]">
                    <div class="text-[12px] font-medium text-[#808080]">Product CON 2023</div>
                    <div class="my-[8px] text-[#444] text-[20px] font-semibold">Narotama Job Fair 2023</div>
                    <div class="text-[#606060] text-[16px] font-medium text-justify">
                        Lorem ipsum dolor sit amet, 
                        consectetur adi piscing elit, 
                        sed eiusmod tempor incididunt ...
                    </div>
                </div>
            </div>
            <div class="h-full bg-white rounded-[8px]">
                <img src="assets/images/homepage-images/cards-image/news/card2.png" alt="card2" class="rounded-tl-[8px] rounded-tr-[8px]">
                <div class="p-[20px]">
                    <div class="text-[12px] font-medium text-[#808080]">Penyelenggaran Pelatihan UX Res ...</div>
                    <div class="my-[8px] text-[#444] text-[20px] font-semibold">Narotama Job Fair 2023</div>
                    <div class="text-[#606060] text-[16px] font-medium text-justify">
                        Lorem ipsum dolor sit amet, 
                        consectetur adi piscing elit, 
                        sed eiusmod tempor incididunt ...
                    </div>
                </div>
            </div>
            <div class="h-full bg-white rounded-[8px]">
                <img src="assets/images/homepage-images/cards-image/news/card3.png" alt="card3" class="rounded-tl-[8px] rounded-tr-[8px]">
                <div class="p-[20px]">
                    <div class="text-[12px] font-medium text-[#808080]">20 Agustus 2023</div>
                    <div class="my-[8px] text-[#444] text-[20px] font-semibold">Narotama Job Fair 2023</div>
                    <div class="text-[#606060] text-[16px] font-medium text-justify">
                        Lorem ipsum dolor sit amet, 
                        consectetur adi piscing elit, 
                        sed eiusmod tempor incididunt ...
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection