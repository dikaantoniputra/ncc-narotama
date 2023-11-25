@extends('user.layout.master')

@section('content')
    {{-- Section - Hero --}}
    <section class="bg-[#4176CF] lg:p-[80px] p-[40px] lg:flex max-sm:grid max-sm:grid-cols-1 lg:gap-[60px] my-auto items-center">
            <img src="../assets/images/course/detail-course/featured.png" alt="featuredimage">
        <div class="max-sm:pt-[40px]">
            <div>
                <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Seminar</span></div>
            </div>
            <div class="text-white font-semibold text-[36px] my-[20px]">
                Pelatihan Uji Sertifikasi dan Kompetensi oleh BNSP Surabaya Tahun 2023
            </div>
            <div class="text-[16px] text-white font-medium">
                Diselenggarakan oleh BNSP Surabaya
            </div>
        </div>
    </section>

    {{-- Section - Detail Pelatihan - Tab Head --}}
    <section class="bg-[#F7F7F7] lg:px-[80px] lg:pt-[80px] lg:pb-[60px] max-sm:p-[40px]">
        <div>
            <div class="flex lg:w-7/12 h-[80px] bg-[#DBDBDB] p-[12px] rounded-[22px] gap-[24px]">
                <button class="tab-button w-full rounded-[10px] font-medium" data-tab="tab-1">
                <div class="flex mx-auto justify-center gap-[16px]">
                    <svg id="iconTabs1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 16V12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 8H12.01" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                                         
                    Deskripsi Kegiatan
                </div>
                </button>
                <button class="tab-button w-full rounded-[10px] font-medium" data-tab="tab-2">
                <div class="flex mx-auto justify-center gap-[16px] px-[24px] text-[16px]">
                    <svg id="iconTabs2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3H8C9.06087 3 10.0783 3.42143 10.8284 4.17157C11.5786 4.92172 12 5.93913 12 7V21C12 20.2044 11.6839 19.4413 11.1213 18.8787C10.5587 18.3161 9.79565 18 9 18H2V3Z" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 3H16C14.9391 3 13.9217 3.42143 13.1716 4.17157C12.4214 4.92172 12 5.93913 12 7V21C12 20.2044 12.3161 19.4413 12.8787 18.8787C13.4413 18.3161 14.2044 18 15 18H22V3Z" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                                                                 
                    Dokumentasi dan Materi
                </div>
                </button>
            </div>
        </div>
    </section>

    {{-- Section - Detail Pelatihan - Tab Content 1 --}}
    <section class="tab-content hidden bg-[#F7F7F7] lg:px-[80px] lg:pb-[80px] max-sm:p-[40px]" id="tab-1">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[28px]">
            <div class="bg-white p-[40px] rounded-[10px]">
                <div class="pb-[16px] text-[28px] text-[#2C2C2C] font-semibold">Deskripsi Kegiatan</div>
                <div class="text-[#606060] text-[16px] font-medium">
                    Halo teman-teman Universitas Narotama Menggali Potensi mahasiswa : 
                    Peluang Webinar PKM untuk Menciptakan Inovasi <br><br>

                    Gas ikutan join webinar kali ini, untuk menciptakan PKM yang inovatif dan kreatif.
                    Jangan sampai ketinggalan 🔥<br><br>

                    Free Registration!! <br>
                    Kuota Terbatas!! <br><br>

                    Benefit : <br>
                    1. Ilmu dan pengetahuan <br>
                    2. E-sertifikat <br>
                    3. Relasi <br>
                    4. 5 Point SKPAM <br><br>

                    Bergabunglah dalam webinar ini dan temukan ilmu baru untuk menciptakan PKM yang inovatif dan kreatif <br><br>

                    Hari, Tanggal : Senin, 20 November 2023 <br>
                    Pukul : 12.00 - 12.00 <br>
                    Lokasi : Google Meeting <br>

                    Tunggu apa lagi? Daftarkan dirimu sekarang!! <br>
                    Contact Person : 08483489489853 (Pipik) <br>
                </div>
            </div>
            <div>
                <div class="bg-white p-[40px] flex flex-col gap-[24px] mb-[28px]">
                    <div class="text-[#2C2C2C] text-[28px] font-semibold">
                        Pendaftaran
                    </div>
                    <div class="text-[#606060] text-[16px] font-medium">
                        Anda belum terdaftar. Silahkan klik tombol dibawah ini untuk mendaftar.
                    </div>
                    <button class="bg-[#4176CF] px-[32px] py-[16px] text-white text-[16px] font-medium rounded-[10px]">
                        Daftar Sekarang
                    </button>
                </div>
                <div class="bg-white p-[40px] flex flex-col gap-[24px] mb-[28px]">
                    <div class="text-[#2C2C2C] text-[28px] font-semibold">
                        Pendaftaran
                    </div>
                    <div class="text-[#606060] text-[16px] font-medium">
                        Anda telah terdaftar. Silahkan menghubungi kontak yang 
                        tersedia untuk informasi lebih lanjut.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section - Detail Pelatihan - Tab Content 2 --}}
    <section class="tab-content hidden bg-[#F7F7F7] lg:px-[80px] lg:pb-[80px] max-sm:p-[40px]" id="tab-2">
        <div class="bg-white p-[40px] rounded-[10px] flex flex-col gap-[24px]">
            {{-- Dokumentasi Kegiatan --}}
            <div class="text-[28px] text-[#2C2C2C] font-semibold">Dokumentasi Kegiatan</div>
            <div class="text-[#606060] text-[16px] font-medium">Berikut dokumentasi kegiatan yang telah berlangsung</div>
            <div class="flex flex-wrap gap-[24px]">
                <img src="../assets/images/course/detail-course/image-doc.png" alt="imageDoc">
                <img src="../assets/images/course/detail-course/image-doc.png" alt="imageDoc">
            </div>

            {{-- Materi --}}
            <div class="text-[28px] text-[#2C2C2C] font-semibold">Materi</div>
            <div class="text-[#606060] text-[16px] font-medium">Berikut dokumentasi kegiatan yang telah berlangsung</div>
            <div class="flex flex-wrap gap-[24px]">
                <img class="w-[368px] h-[216px] bg-[#DBDBDB] rounded-[10px]" src="#" alt="imageMateri">
                <img class="w-[368px] h-[216px] bg-[#DBDBDB] rounded-[10px]" src="#" alt="imageMateri">
            </div>
        </div>
    </section>
@endsection