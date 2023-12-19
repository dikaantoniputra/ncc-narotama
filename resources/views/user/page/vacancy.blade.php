@extends('user.layout.master')

@section('content')
<section class="bg-[#F7F7F7]">
    {{-- Section - Tabs Head --}}
    <section class="bg-[#F7F7F7]  lg:px-[80px] lg:pt-[60px] max-sm:p-[40px]">
        <div>
            <div class="flex lg:w-[1061px] h-[80px] bg-[#DBDBDB] p-[12px] mx-auto rounded-[22px] gap-[24px]">
                <button class="tab-button w-full rounded-[10px] font-medium" data-tab="tab-1">
                <div class="flex mx-auto justify-center gap-[16px]">
                    <svg id="iconTabs1" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.75 7H4.75C3.64543 7 2.75 7.89543 2.75 9V19C2.75 20.1046 3.64543 21 4.75 21H20.75C21.8546 21 22.75 20.1046 22.75 19V9C22.75 7.89543 21.8546 7 20.75 7Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.75 21V5C16.75 4.46957 16.5393 3.96086 16.1642 3.58579C15.7891 3.21071 15.2804 3 14.75 3H10.75C10.2196 3 9.71086 3.21071 9.33579 3.58579C8.96071 3.96086 8.75 4.46957 8.75 5V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                                       
                    Lowongan
                </div>
                </button>
                <button class="tab-button w-full rounded-[10px] font-medium" data-tab="tab-2">
                <div class="flex mx-auto justify-center gap-[16px] px-[24px]">
                    <svg id="iconTabs2" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.75 2H6.75C6.21957 2 5.71086 2.21071 5.33579 2.58579C4.96071 2.96086 4.75 3.46957 4.75 4V20C4.75 20.5304 4.96071 21.0391 5.33579 21.4142C5.71086 21.7893 6.21957 22 6.75 22H18.75C19.2804 22 19.7891 21.7893 20.1642 21.4142C20.5393 21.0391 20.75 20.5304 20.75 20V9L13.75 2Z" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.75 2V9H20.75" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                                                                                
                    Lamaran
                </div>
                </button>
            </div>
        </div>
    </section>

    {{-- Section - Tab Content 1 --}}
    <section class="tab-content hidden" id="tab-1">
        <form action="{{ route('user.page.vacancy') }}" method="GET" class="lg:my-[60px] my-[30px] lg:mx-[80px] mx-[40px] bg-white grid lg:grid-cols-4 grid-cols-1 items-center rounded-[18px] justify-between p-[12px] gap-[24px]">
            <div class="bg-[#F7F7F7] flex items-center px-[24px] rounded-[6px]">
                <input class="w-full border-none focus:border-none focus:outline-none focus:ring-0 bg-[#F7F7F7]" name="title_pekerjaan" placeholder="Cari Posisi" type="text">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.5 7H4.5C3.39543 7 2.5 7.89543 2.5 9V19C2.5 20.1046 3.39543 21 4.5 21H20.5C21.6046 21 22.5 20.1046 22.5 19V9C22.5 7.89543 21.6046 7 20.5 7Z" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.5 21V5C16.5 4.46957 16.2893 3.96086 15.9142 3.58579C15.5391 3.21071 15.0304 3 14.5 3H10.5C9.96957 3 9.46086 3.21071 9.08579 3.58579C8.71071 3.96086 8.5 4.46957 8.5 5V21" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                        
            </div>
            <div class="bg-[#F7F7F7] flex items-center px-[24px] rounded-[6px]">
                <input class="w-full border-none focus:border-none focus:outline-none focus:ring-0 bg-[#F7F7F7]" name="kota" placeholder="Cari Kota" type="text">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.5 10C21.5 17 12.5 23 12.5 23C12.5 23 3.5 17 3.5 10C3.5 7.61305 4.44821 5.32387 6.13604 3.63604C7.82387 1.94821 10.1131 1 12.5 1C14.8869 1 17.1761 1.94821 18.864 3.63604C20.5518 5.32387 21.5 7.61305 21.5 10Z" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.5 13C14.1569 13 15.5 11.6569 15.5 10C15.5 8.34315 14.1569 7 12.5 7C10.8431 7 9.5 8.34315 9.5 10C9.5 11.6569 10.8431 13 12.5 13Z" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                          
            </div>
            <div class="bg-[#F7F7F7] flex items-center px-[24px] rounded-[6px]">
                <input class="w-full border-none focus:border-none focus:outline-none focus:ring-0 bg-[#F7F7F7]" name="kategori" placeholder="Cari Kategori" type="text">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.667 11.08V12C22.6658 14.1564 21.9675 16.2547 20.6763 17.9818C19.3852 19.709 17.5703 20.9725 15.5023 21.5839C13.4344 22.1953 11.2243 22.1219 9.20146 21.3746C7.17867 20.6273 5.45165 19.2461 4.27795 17.4371C3.10426 15.628 2.54678 13.4881 2.68867 11.3363C2.83055 9.18455 3.6642 7.13631 5.06527 5.49706C6.46635 3.85781 8.35978 2.71537 10.4632 2.24013C12.5666 1.7649 14.7673 1.98232 16.737 2.85999" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.667 4L12.667 14.01L9.66699 11.01" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                                            
            </div>
            <div class="">
                <button type="submit" class="w-full flex gap-[16px] bg-[#4176CF] px-[32px] py-[16px] rounded-[10px] text-white text-[16px] font-medium mx-auto justify-center">
                    Cari Kegiatan
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5 19C15.9183 19 19.5 15.4183 19.5 11C19.5 6.58172 15.9183 3 11.5 3C7.08172 3 3.5 6.58172 3.5 11C3.5 15.4183 7.08172 19 11.5 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.4999 21L17.1499 16.65" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>    
                </button>
            </div>
        </form>

        {{-- Section - Lowongan Baru 1 --}}
        <section class="lg:mx-[80px] lg:mb-[80px] mx-[40px] mb-[40px]">
            <div>
                <h1 class="lg:text-[36px] text-[30px] text-[#2C2C2C] font-semibold mb-[40px]">Lowongan Terbaru</h1>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-[28px]">
                @forelse ($latestVacancy as $item)
                    <div class="shadow-xl">
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
                                    {{ $item->kota }}
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
            </div>
        </section>

        {{-- Section - Lowongan Baru 2 --}}
        <section class=" bg-[#4176CF] lg:p-[80px] p-[40px]">
            <div>
                <h1 class="lg:text-[36px] text-[30px] text-white font-semibold mb-[40px]">Lowongan</h1>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-[28px]">
                @forelse ($searchVacancy as $item)
                <div class="shadow-xl">
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
                                {{ $item->kota }}
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
    </section>

    {{-- Section - Tab Content 2 --}}
    <section class="tab-content hidden" id="tab-2">
        <div class="lg:my-[60px] my-[30px] lg:mx-[80px] mx-[40px] bg-white grid lg:grid-cols-3 grid-cols-1 items-center rounded-[18px] justify-between p-[12px] gap-[24px]">
            <select class="bg-[#F7F7F7] border-none rounded-[6px] text-[16px] font-medium text-[#ABABAB]">
                <option value="">Terbaru</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
            <select class="bg-[#F7F7F7] border-none rounded-[6px] text-[16px] font-medium text-[#ABABAB]">
                <option value="">Status</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
            <div class="">
                <button class="w-full flex gap-[16px] bg-[#4176CF] px-[32px] py-[16px] rounded-[10px] text-white text-[16px] font-medium mx-auto justify-center">
                    Cari Lamaran
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5 19C15.9183 19 19.5 15.4183 19.5 11C19.5 6.58172 15.9183 3 11.5 3C7.08172 3 3.5 6.58172 3.5 11C3.5 15.4183 7.08172 19 11.5 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.4999 21L17.1499 16.65" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>    
                </button>
            </div>
        </div>

        {{-- Section - Status Lamaran --}}
        <section class="lg:mx-[80px] lg:pb-[80px] mx-[40px] mb-[40px]">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-[28px]">
                @forelse ($haveApplied as $item)
                    <div class="shadow-xl">
                        <div class="bg-[#F7F7F7] p-[20px] flex gap-[24px] rounded-tl-[8px] rounded-tr-[8px]">
                            <div>
                                <img src="{{ asset('uploads/' . $item->lowongan->logo) }}" alt="Logo Perusahaan" class="bg-[#C7C7C7] w-[100px] h-[100px] rounded-[8px]">
                            </div>
                            <div class="flex w-full justify-between">
                                <div>
                                    <div class="text-[20px] font-semibold text-[#444] mb-[4px] flex justify-between w-full">
                                        <div>{{ $item->lowongan->title_pekerjaan }}</div>
                                    </div>
                                    <div class="text-[16px] font-medium text-[#444] mb-[24px]">
                                        {{ $item->lowongan->nama_perusahaan }}
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
                                        {{ $item->lowongan->kota }}
                                    </div>
                                </div>
                                <div class="items-end">
                                    @if ($item->status === 'Dikirim')
                                        <div class="bg-[#4176CF] px-[12px] py-[4px] rounded-[20px] text-[12px] text-white font-bold">DIKIRIM</div>
                                    @elseif ($item->status === 'Dalam review')
                                        <div class="bg-[#FFC107] px-[12px] py-[4px] rounded-[20px] text-[12px] text-white font-bold">DALAM REVIEW</div>
                                    @elseif ($item->status === 'Dalam review')
                                        <div class="bg-[#DC3545] px-[12px] py-[4px] rounded-[20px] text-[12px] text-white font-bold">TDK SESUAI</div>
                                    @elseif ($item->status === 'Tidak sesuai')
                                        <div class="bg-[#198754] px-[12px] py-[4px] rounded-[20px] text-[12px] text-white font-bold">DITERIMA</div>
                                    @endif
                                </div>                         
                            </div>
                        </div>
                    </div>
                @empty 
                    <div>Anda belum melamar</div>
                @endforelse
            </div>
        </section>
    </section>
</section>
@endsection