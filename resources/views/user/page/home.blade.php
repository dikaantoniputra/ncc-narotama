@extends('user.layout.master')

@section('content')
    <section class="bg-cover bg-center lg:h-[552px] lg:p-[80px] p-[40px]" style="background-image: url('/assets/images/bg-themes/bg-section1-homepage.png');">
        {{-- Card --}}
        <div class="bg-white lg:w-[562px] lg:h-[392px] lg:p-[60px] p-[30px] rounded-[6px]">
            <div class="text-[28px] font-semibold">
                Pelatihan dan Bimbingan <span class="text-[#4176CF]">Karir</span> hingga <span class="text-[#4176CF]">Kewirausahaan</span>
            </div>
            <div class="text-[16px] font-medium text-[#606060] mt-[28px]">
                Sistem Informasi Narotama Career Center hadir untuk 
                membantu Alumni dan Mahasiswa mempersiapkan karir 
                hingga minat dalam kewirausahaan.
            </div>
            <div class="mt-[36px]">
                <a href="{{ url('pelatihan') }}" class="bg-[#4176CF] hover:bg-blue-600 text-white rounded-[10px] flex lg:w-1/2">
                    <div class="flex mx-auto px-[32px] py-[16px]">
                        Selengkapnya
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- Section - Tentang Kami --}}
    <section class="bg-white lg:p-[80px] p-[40px]"> 
        <div class="lg:h-[312px] grid lg:grid-cols-2 gap-[50px]">
            <div class="my-auto">
                <div class="text-[36px] font-semibold mb-[16px]">
                    Tentang <span class="text-[#4176CF]">Kami</span>
                </div>
                <div class="text-[#606060] font-medium">
                    Narotama Career Center merupakan  pusat informasi bursa kerja dan pelatihan
                    serta pengembangan dalam mempersiapkan mahasiswa dan alumni 
                    yang mampu bersaing di lapangan kerja serta siap menjadi entepreneur
                </div>
            </div>
            <div class="my-auto">
                <img src="assets/images/homepage-images/section-tentang-kami.png" height="312" alt="TentangkamiIMG">
            </div>
        </div>
    </section>
    {{-- Section - Misi Kami --}}
    <section class="bg-[#4176CF] lg:p-[80px] p-[40px]">
        <h1 class="text-[36px] text-white font-semibold text-center mb-[60px]">Misi <span class="text-[#F5F500]">Kami</span></h1>
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-[100px]">
            <div>
                <img src="assets/images/homepage-images/icons/section-misi-kami-1.png" alt="icon1" class="mx-auto mb-[40px]">
                <div class="text-center text-white font-medium">
                    Memberikan pemahaman jiwa kewirausahaan kepada 
                    mahasiswa dan alumni untuk meningkatkan pertumbuhan 
                    wirausaha baru.
                </div>
            </div>
            <div>
                <img src="assets/images/homepage-images/icons/section-misi-kami-2.png" alt="icon2" class="mx-auto mb-[40px]">
                <div class="text-center text-white font-medium">
                    Menyiapkan mahasiswa dan alumni
                    sesuai standar kompetensi di dunia
                    usaha dan industri
                </div>
            </div>
            <div>
                <img src="assets/images/homepage-images/icons/section-misi-kami-3.png" alt="icon3" class="mx-auto mb-[40px]">
                <div class="text-center text-white font-medium">
                    Menciptakan jaringan kerja antara lembaga pendidikan tinggi, unit 
                    pelatihan, industri dan masyarakat pengguna lulusan
                </div>
            </div>
        </div>
    </section>
    {{-- Section - Artikel Berita --}}
    <section class="bg-[#F7F7F7] lg:p-[80px] p-[40px]">
        <h1 class="text-[36px] text-black font-semibold text-center mb-[60px]">Artikel <span class="text-[#4176CF]">Berita</span></h1>
        {{-- Card Berita --}}
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-[28px]">
            @forelse ($latestArtikel as $item)
                <div class="h-full bg-white rounded-[8px]">
                    <img src="{{ asset('uploads/' . $item->cover) }}" alt="card1" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-medium text-[#808080]">{{ $item->created_at }}</div>
                        <a href="{{ route('user.page.detailNews', $item->id) }}" class="my-[8px] text-[#444] text-[20px] font-semibold hover:text-blue-600">{{ $item->judul }}</a>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            {{ mb_substr(strip_tags($item->isi), 0, 150) }}
                        </div>
                    </div>
                </div>
            @empty
             <div>Mohon maaf, pelatihan saat ini belum tersedia</div>
            @endforelse
        </div>
        {{-- Tombol Selengkapnya --}}
        <div class="flex mx-auto">
            <a href="{{ route('user.page.news') }}" class="bg-[#4176CF] hover:bg-blue-600 text-white mt-[40px] px-[32px] py-[16px] font-medium text-[16px] rounded-[10px] mx-auto">Lihat Semua Berita</a>
        </div>
    </section>
    {{-- Section - Pelatihan --}}
    <section class="bg-white lg:p-[80px] p-[40px]">
        <div class="flex justify-between">
            <h1 class="lg:text-[36px] text-[30px] text-black font-semibold mb-[60px]">Pelatihan</h1>
            <a href="{{ route('user.page.course') }}" class="text-[16px] text-[#4176CF] font-medium mb-[60px] flex gap-[16px] items-center">
                Lihat Semua
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19" stroke="#4176CF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5L19 12L12 19" stroke="#4176CF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>     
            </a>
        </div>
        {{-- Card Pelatihan --}}
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-[28px]">
            @forelse ($latestCourse as $item)
                <div class="h-full bg-[#F7F7F7] rounded-[8px]">
                    <img src="{{ asset('uploads/' . $item->poster) }}" alt="Card Image {{ $item->nama_pelatihan }}" class="rounded-tl-[8px] rounded-tr-[8px] w-[408px] h-[212px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">{{ $item->kategoripelatihan->kategori }}</span></div>
                        <a href="{{ route('user.page.detailCourse', $item->id) }}" class="my-[8px] text-[#444] text-[20px] font-semibold hover:text-blue-600">{{ $item->nama_pelatihan }}</a>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            {{ strip_tags($item->deskripsi) }}
                        </div>
                    </div>
                </div>
            @empty
                <div>Mohon maaf, pelatihan saat ini belum tersedia</div>
            @endforelse
        </div>
    </section>
    {{-- Section - Lowongan --}}
    <section class="bg-[#4176CF] lg:p-[80px] p-[40px]">
        <div class="flex justify-between">
            <h1 class="lg:text-[36px] text-[30px] text-white font-semibold mb-[60px]">Lowongan</h1>
            <a href="{{ route('user.page.vacancy') }}" class="text-[16px] text-white font-medium mb-[60px] flex gap-[16px] items-center">
                Lihat Semua
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
            </a>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[28px]">
            @forelse ($latestVacancy as $item)
                <div>
                    <div class="bg-[#F7F7F7] p-[20px] flex flex-wrap gap-[24px] rounded-tl-[8px] rounded-tr-[8px] ">
                        <img src="{{ asset('uploads/' . $item->logo) }}" alt="Logo Perusahaan" class="bg-[#C7C7C7] w-[100px] h-[100px] rounded-[8px]">
                        <div class="w-[268px]">
                            <a href="{{ route('user.page.detailVacancy', $item->id) }}" class="text-[20px] font-semibold text-[#444] mb-[4px] hover:text-blue-600">
                                {{ $item->title_pekerjaan }}
                            </a>
                            <div class="text-[16px] font-medium text-[#444] mb-[24px]">
                                {{ $item->nama_perusahaan }}
                            </div>
                            <div class="flex gap-[8px] items-center text-[#606060] text-[12px]">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_137_1297)">
                                    <path d="M14 6.66699C14 11.3337 8 15.3337 8 15.3337C8 15.3337 2 11.3337 2 6.66699C2 5.07569 2.63214 3.54957 3.75736 2.42435C4.88258 1.29913 6.4087 0.666992 8 0.666992C9.5913 0.666992 11.1174 1.29913 12.2426 2.42435C13.3679 3.54957 14 5.07569 14 6.66699Z" stroke="#606060" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 8.66699C9.10457 8.66699 10 7.77156 10 6.66699C10 5.56242 9.10457 4.66699 8 4.66699C6.89543 4.66699 6 5.56242 6 6.66699C6 7.77156 6.89543 8.66699 8 8.66699Z" stroke="#606060" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_137_1297">
                                    <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                                Surabaya
                            </div>
                        </div>
                        <div class="text-[12px] font-bold">
                            <div class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">
                                {{ $item->kategorilowongan->kategori }}
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-[20px] rounded-bl-[8px] rounded-br-[8px] ">
                        <div class="text-[#606060] mb-[32px]">
                            {{ strip_tags($item->deskripsi_pekerjaan) }}
                        </div>
                        <div class="flex">
                            <a href="{{ route('user.page.detailVacancy', $item->id) }}" class="text-[16px] text-white font-medium px-[32px] py-[16px] bg-[#4176CF] hover:bg-blue-600 rounded-[10px] ml-auto">
                                Apply
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div>Data Kosong</div>
            @endforelse
    </section>
@endsection