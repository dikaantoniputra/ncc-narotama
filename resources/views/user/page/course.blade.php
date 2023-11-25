@extends('user.layout.master')

@section('content')
    {{-- Section - Hero --}}
    <section class="bg-[#F7F7F7] lg:pl-[80px] lg:pr-[80px] lg:pt-[60px] max-sm:p-[40px]">
        <div>
            <div class="flex lg:w-[1061px] h-[80px] bg-[#DBDBDB] p-[12px] mx-auto rounded-[22px] gap-[24px]">
              <button class="tab-button w-full rounded-[10px] font-medium" data-tab="tab-1">
                <div class="flex mx-auto justify-center gap-[16px]">
                    <svg id="iconTabs1" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.25 15C16.116 15 19.25 11.866 19.25 8C19.25 4.13401 16.116 1 12.25 1C8.38401 1 5.25 4.13401 5.25 8C5.25 11.866 8.38401 15 12.25 15Z" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.46 13.89L7.25 23L12.25 20L17.25 23L16.04 13.88" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                    
                    Pelatihan
                </div>
              </button>
              <button class="tab-button w-full rounded-[10px] font-medium" data-tab="tab-2">
                <div class="flex mx-auto justify-center gap-[16px] px-[24px]">
                    <svg id="iconTabs2" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 11L12.75 14L22.75 4" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.75 12V19C21.75 19.5304 21.5393 20.0391 21.1642 20.4142C20.7891 20.7893 20.2804 21 19.75 21H5.75C5.21957 21 4.71086 20.7893 4.33579 20.4142C3.96071 20.0391 3.75 19.5304 3.75 19V5C3.75 4.46957 3.96071 3.96086 4.33579 3.58579C4.71086 3.21071 5.21957 3 5.75 3H16.75" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                                           
                    Terdaftar
                </div>
              </button>
            </div>
            <div class="mt-[60px] bg-white grid lg:grid-cols-3 grid-cols-2 lg:w-[943px] h-[80px] mx-auto items-center rounded-[18px] justify-between p-[12px] gap-[24px]">
                <div class="bg-[#F7F7F7] flex items-center px-[24px] rounded-[6px]">
                    <input class="w-full border-none focus:border-none focus:outline-none focus:ring-0 bg-[#F7F7F7]" placeholder="Cari Pelatihan" type="text">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.5 7H4.5C3.39543 7 2.5 7.89543 2.5 9V19C2.5 20.1046 3.39543 21 4.5 21H20.5C21.6046 21 22.5 20.1046 22.5 19V9C22.5 7.89543 21.6046 7 20.5 7Z" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.5 21V5C16.5 4.46957 16.2893 3.96086 15.9142 3.58579C15.5391 3.21071 15.0304 3 14.5 3H10.5C9.96957 3 9.46086 3.21071 9.08579 3.58579C8.71071 3.96086 8.5 4.46957 8.5 5V21" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                        
                </div>
                <div class="bg-[#F7F7F7] flex items-center px-[24px] rounded-[6px]">
                    <input class="w-full border-none focus:border-none focus:outline-none focus:ring-0 bg-[#F7F7F7]" placeholder="Cari Kategori" type="text">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5 10C21.5 17 12.5 23 12.5 23C12.5 23 3.5 17 3.5 10C3.5 7.61305 4.44821 5.32387 6.13604 3.63604C7.82387 1.94821 10.1131 1 12.5 1C14.8869 1 17.1761 1.94821 18.864 3.63604C20.5518 5.32387 21.5 7.61305 21.5 10Z" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.5 13C14.1569 13 15.5 11.6569 15.5 10C15.5 8.34315 14.1569 7 12.5 7C10.8431 7 9.5 8.34315 9.5 10C9.5 11.6569 10.8431 13 12.5 13Z" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                          
                </div>
                <div class="">
                    <button class="w-full flex gap-[16px] bg-[#4176CF] px-[32px] py-[16px] rounded-[10px] text-white text-[16px] font-medium mx-auto justify-center">
                        Cari Kegiatan
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 19C15.9183 19 19.5 15.4183 19.5 11C19.5 6.58172 15.9183 3 11.5 3C7.08172 3 3.5 6.58172 3.5 11C3.5 15.4183 7.08172 19 11.5 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.4999 21L17.1499 16.65" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>    
                    </button>
                </div>
            </div>
          </div>
    </section>

    {{-- Section - Tabs 1 --}}
    <section class="tab-content hidden" id="tab-1">
        {{-- Section - Pelatihan Terbaru --}}
        <section class="bg-[#F7F7F7] lg:px-[80px] lg:pb-[80px] lg:pt-[60px] pt-[30px] pb-[40px] px-[40px]">
            <div>
                <h1 class="lg:text-[36px] text-[30px] text-black font-semibold mb-[60px]">Pelatihan Terbaru</h1>
            </div>
            {{-- Card Pelatihan --}}
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-[28px]">
                <div class="h-full bg-white rounded-[8px]">
                    <img src="assets/images/homepage-images/cards-image/course/card1.png" alt="card1" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Webinar</span></div>
                        <div class="my-[8px] text-[#444] text-[20px] font-semibold">Pelatihan Kompetensi Perangkat ...</div>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            Lorem ipsum dolor sit amet, 
                            consectetur adi piscing elit, 
                            sed eiusmod tempor incididunt ...
                        </div>
                    </div>
                </div>
                <div class="h-full bg-white rounded-[8px]">
                    <img src="assets/images/homepage-images/cards-image/course/card2.png" alt="card2" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Seminar</span></div>
                        <div class="my-[8px] text-[#444] text-[20px] font-semibold">Seminar Skill Development : Pemb ...</div>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            Lorem ipsum dolor sit amet, 
                            consectetur adi piscing elit, 
                            sed eiusmod tempor incididunt ...
                        </div>
                    </div>
                </div>
                <div class="h-full bg-white rounded-[8px]">
                    <img src="assets/images/homepage-images/cards-image/course/card3.png" alt="card3" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Webinar</span></div>
                        <div class="my-[8px] text-[#444] text-[20px] font-semibold">Webinar Entepreneurship Manaje ...</div>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            Lorem ipsum dolor sit amet, 
                            consectetur adi piscing elit, 
                            sed eiusmod tempor incididunt ...
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section - Semua Pelatihan --}}
        <section class="bg-[#4176CF] lg:px-[80px] lg:py-[80px] py-[40px] px-[40px]">
            <div>
                <h1 class="lg:text-[36px] text-[30px] text-white font-semibold mb-[60px]">Semua Pelatihan</h1>
            </div>
            {{-- Card Pelatihan - Baris 1 --}}
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-[28px] mt-[40px]">
                <div class="h-full bg-white rounded-[8px]">
                    <img src="assets/images/homepage-images/cards-image/course/card1.png" alt="card1" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Webinar</span></div>
                        <div class="my-[8px] text-[#444] text-[20px] font-semibold">Pelatihan Kompetensi Perangkat ...</div>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            Lorem ipsum dolor sit amet, 
                            consectetur adi piscing elit, 
                            sed eiusmod tempor incididunt ...
                        </div>
                    </div>
                </div>
                <div class="h-full bg-white rounded-[8px]">
                    <img src="assets/images/homepage-images/cards-image/course/card2.png" alt="card2" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Seminar</span></div>
                        <div class="my-[8px] text-[#444] text-[20px] font-semibold">Seminar Skill Development : Pemb ...</div>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            Lorem ipsum dolor sit amet, 
                            consectetur adi piscing elit, 
                            sed eiusmod tempor incididunt ...
                        </div>
                    </div>
                </div>
                <div class="h-full bg-white rounded-[8px]">
                    <img src="assets/images/homepage-images/cards-image/course/card3.png" alt="card3" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Webinar</span></div>
                        <div class="my-[8px] text-[#444] text-[20px] font-semibold">Webinar Entepreneurship Manaje ...</div>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            Lorem ipsum dolor sit amet, 
                            consectetur adi piscing elit, 
                            sed eiusmod tempor incididunt ...
                        </div>
                    </div>
                </div>
            </div>
            {{-- Card Pelatihan - Baris 2 --}}
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-[28px] mt-[40px]">
                <div class="h-full bg-white rounded-[8px]">
                    <img src="assets/images/homepage-images/cards-image/course/card1.png" alt="card1" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Webinar</span></div>
                        <div class="my-[8px] text-[#444] text-[20px] font-semibold">Pelatihan Kompetensi Perangkat ...</div>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            Lorem ipsum dolor sit amet, 
                            consectetur adi piscing elit, 
                            sed eiusmod tempor incididunt ...
                        </div>
                    </div>
                </div>
                <div class="h-full bg-white rounded-[8px]">
                    <img src="assets/images/homepage-images/cards-image/course/card2.png" alt="card2" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Seminar</span></div>
                        <div class="my-[8px] text-[#444] text-[20px] font-semibold">Seminar Skill Development : Pemb ...</div>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            Lorem ipsum dolor sit amet, 
                            consectetur adi piscing elit, 
                            sed eiusmod tempor incididunt ...
                        </div>
                    </div>
                </div>
                <div class="h-full bg-white rounded-[8px]">
                    <img src="assets/images/homepage-images/cards-image/course/card3.png" alt="card3" class="rounded-tl-[8px] rounded-tr-[8px]">
                    <div class="p-[20px]">
                        <div class="text-[12px] font-bold text-black"><span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Webinar</span></div>
                        <div class="my-[8px] text-[#444] text-[20px] font-semibold">Webinar Entepreneurship Manaje ...</div>
                        <div class="text-[#606060] text-[16px] font-medium text-justify">
                            Lorem ipsum dolor sit amet, 
                            consectetur adi piscing elit, 
                            sed eiusmod tempor incididunt ...
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


    {{-- Section - Tabs 2 --}}
    <section class="tab-content hidden" id="tab-2">
        {{-- Section - Pelatihan Terdaftar --}}
        <section class="bg-[#F7F7F7] lg:px-[80px] lg:pb-[80px] lg:pt-[60px] pt-[30px] pb-[40px] px-[40px]">
            <div>
                <h1 class="lg:text-[36px] text-[38px] text-black font-semibold mb-[60px]">Pelatihan Terdaftar</h1>
            </div>
            {{-- Tabel --}}
            <div class="overflow-x-auto">
                <table class="w-full rounded-[18px]">
                    <thead class="bg-[#4176CF] text-white text-[20px] font-semibold">
                        <tr>
                            <th class="px-[24px] py-[16px] rounded-tl-[18px]">No</th>
                            <th class="px-[24px] py-[16px]">Nama Pelatihan</th>
                            <th class="px-[24px] py-[16px]">Tanggal</th>
                            <th class="px-[24px] py-[16px]">Status</th>
                            <th class="px-[24px] py-[16px] rounded-tr-[18px]">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="text-center text-[#606060]">
                            <td class="px-[24px] py-[16px]">
                                1
                            </td>
                            <td class="px-[24px] py-[16px]">
                                Pelatihan UI UX Design oleh Dicoding Indonesia
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                2 Agustus 2023
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                <span class="px-[12px] py-[4px] bg-[#FFC107] text-[12px] font-bold text-[#2C2C2C] rounded-[20px]">TERDAFTAR</span>
                            </td>
                            <td class="px-[24px] py-[16px]">
                                <a href="#" class="px-[20px] py-[10px] bg-[#4176CF] rounded-[6px] text-white">Lihat Kegiatan</a>
                            </td>
                        </tr>
                        <tr class="text-center text-[#606060]">
                            <td class="px-[24px] py-[16px]">
                                2
                            </td>
                            <td class="px-[24px] py-[16px]">
                                Pelatihan UI UX Design oleh Dicoding Indonesia
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                2 Agustus 2023
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                <span class="px-[12px] py-[4px] bg-[#FFC107] text-[12px] font-bold text-[#2C2C2C] rounded-[20px]">TERDAFTAR</span>
                            </td>
                            <td class="px-[24px] py-[16px]">
                                <a href="#" class="px-[20px] py-[10px] bg-[#4176CF] rounded-[6px] text-white">Lihat Kegiatan</a>
                            </td>
                        </tr>
                        <tr class="text-center text-[#606060]">
                            <td class="px-[24px] py-[16px]">
                                3
                            </td>
                            <td class="px-[24px] py-[16px]">
                                Pelatihan UI UX Design oleh Dicoding Indonesia
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                2 Agustus 2023
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                <span class="px-[12px] py-[4px] bg-[#198754] text-[12px] font-bold text-white rounded-[20px]">SELESAI</span>
                            </td>
                            <td class="px-[24px] py-[16px]">
                                <a href="#" class="px-[20px] py-[10px] bg-[#4176CF] rounded-[6px] text-white">Lihat Kegiatan</a>
                            </td>
                        </tr>
                        <tr class="text-center text-[#606060]">
                            <td class="px-[24px] py-[16px]">
                                4
                            </td>
                            <td class="px-[24px] py-[16px]">
                                Pelatihan UI UX Design oleh Dicoding Indonesia
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                2 Agustus 2023
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                <span class="px-[12px] py-[4px] bg-[#198754] text-[12px] font-bold text-white rounded-[20px]">SELESAI</span>
                            </td>
                            <td class="px-[24px] py-[16px]">
                                <a href="#" class="px-[20px] py-[10px] bg-[#4176CF] rounded-[6px] text-white">Lihat Kegiatan</a>
                            </td>
                        </tr>
                        <tr class="text-center text-[#606060]">
                            <td class="px-[24px] py-[16px]">
                                5
                            </td>
                            <td class="px-[24px] py-[16px]">
                                Pelatihan UI UX Design oleh Dicoding Indonesia
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                2 Agustus 2023
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                <span class="px-[12px] py-[4px] bg-[#198754] text-[12px] font-bold text-white rounded-[20px]">SELESAI</span>
                            </td>
                            <td class="px-[24px] py-[16px]">
                                <a href="#" class="px-[20px] py-[10px] bg-[#4176CF] rounded-[6px] text-white">Lihat Kegiatan</a>
                            </td>
                        </tr>
                        <tr class="text-center text-[#606060]">
                            <td class="px-[24px] py-[16px]">
                                6
                            </td>
                            <td class="px-[24px] py-[16px]">
                                Pelatihan UI UX Design oleh Dicoding Indonesia
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                2 Agustus 2023
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                <span class="px-[12px] py-[4px] bg-[#198754] text-[12px] font-bold text-white rounded-[20px]">SELESAI</span>
                            </td>
                            <td class="px-[24px] py-[16px]">
                                <a href="#" class="px-[20px] py-[10px] bg-[#4176CF] rounded-[6px] text-white">Lihat Kegiatan</a>
                            </td>
                        </tr>
                        <tr class="text-center text-[#606060]">
                            <td class="px-[24px] py-[16px]">
                                7
                            </td>
                            <td class="px-[24px] py-[16px]">
                                Pelatihan UI UX Design oleh Dicoding Indonesia
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                2 Agustus 2023
                            </td class="px-[24px] py-[16px]">
                            <td class="px-[24px] py-[16px]">
                                <span class="px-[12px] py-[4px] bg-[#198754] text-[12px] font-bold text-white rounded-[20px]">SELESAI</span>
                            </td>
                            <td class="px-[24px] py-[16px]">
                                <a href="#" class="px-[20px] py-[10px] bg-[#4176CF] rounded-[6px] text-white">Lihat Kegiatan</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </section>
@endsection