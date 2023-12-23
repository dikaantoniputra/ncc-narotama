@extends('user.layout.master')

@section('content')
    {{-- Section - Head Button --}}
    <section class="bg-[#F7F7F7] lg:px-[120px] px-[60px] lg:py-[60px] py-[30px] flex flex-wrap lg:justify-between items-center">
        <div class="flex flex-wrap gap-[43px]">
            <img class="bg-[#C7C7C7] w-[140px] h-[140px] rounded-[6px]" src="{{ asset('uploads/' . $detailVacancy->logo) }}" alt="logoPerusahaan">
            <div class="justify-center my-auto">
                <div class="mb-[12px] text-[28px] font-semibold text-[#2C2C2C]">
                    {{ $detailVacancy->title_pekerjaan }}
                </div>
                <div class="mb-[18px] text-[20px] font-medium text-[#2C2C2C]">
                    {{ $detailVacancy->nama_perusahaan }}
                </div>
                <div class="flex gap-[20px]">
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
                    <div class="flex gap-[8px] items-center text-[#606060] text-[12px]">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6667 2.66663H3.33333C2.59695 2.66663 2 3.26358 2 3.99996V13.3333C2 14.0697 2.59695 14.6666 3.33333 14.6666H12.6667C13.403 14.6666 14 14.0697 14 13.3333V3.99996C14 3.26358 13.403 2.66663 12.6667 2.66663Z" stroke="#606060" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.667 1.33337V4.00004" stroke="#606060" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.33301 1.33337V4.00004" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 6.66663H14" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                            
                        Diupload pada {{ \Carbon\Carbon::parse($detailVacancy->created_at)->format('d M Y') }}
                    </div>
                </div>
            </div>
        </div>
        <div>
            @if (!!$haveApplied)
            <button type="button" data-modal-target="vacancyForm" data-modal-toggle="vacancyForm" class="bg-[#4176CF] hover:bg-blue-600 text-white text-[16px] font-medium px-[32px] py-[16px] rounded-[10px]">
                Kirim Lamaran
            </button>
            @else
            <button type="button" data-modal-target="vacancyForm" disabled data-modal-toggle="vacancyForm" class="bg-[#ABABAB] text-white text-[16px] font-medium px-[32px] py-[16px] rounded-[10px]">
                Kirim Lamaran
            </button>
            @endif
        </div>
    </section>
    {{-- Flash Message --}}
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @else
        <div>
            {{ session('error') }}
        </div>
    @endif

    {{-- Section - Detail Deskripsi Lowongan --}}
    <section class="bg-white lg:px-[298px] px-[40px] lg:py-[80px] py-[80px]">
        <div class="flex gap-[20px]">
            <span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px] text-[12px] font-bold">
                {{ $detailVacancy->kategorilowongan->kategori ?? 'Kategori Kosong' }}
            </span>
            <span class="bg-[#4176CF] px-[12px] py-[4px] rounded-[20px] text-[12px] font-bold text-white">
                Dikirim
            </span>
        </div>
        <div class="mt-[40px]">
            <div class="mb-[28px]">
                <h1 class="text-[#2C2C2C] font-bold text-[16px] pb-[20px]">Deskripsi Pekerjaan</h1>
                <div class="text-[16px] text-[#2C2C2C] font-medium">
                    {!! $detailVacancy->deskripsi_pekerjaan !!}
                </div>
            </div>
            <div class="mb-[28px]">
                <h1 class="text-[#2C2C2C] font-bold text-[16px] pb-[20px]">Syarat Pekerjaan</h1>
                <div class="text-[16px] text-[#2C2C2C] font-medium">
                    {{ $detailVacancy->kompetensi_pekerjaan }}
                </div>
            </div>
            <div>
                <h1 class="text-[#2C2C2C] font-bold text-[16px] pb-[20px]">Kompetensi Pekerjaan</h1>
                <div class="text-[16px] text-[#2C2C2C] font-medium">
                    {{ $detailVacancy->kompetensi_pekerjaan }}
                </div>
            </div>
        </div>
    </section>

    {{-- Form Modal Lamaran --}}
    <!-- Main modal -->
    <div id="vacancyForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-[1000px] max-h-full">
            <!-- Modal content -->
            <form action="{{ route('user.storeApplication') }}" enctype="multipart/form-data" method="POST"  class="relative bg-white rounded-lg shadow">
                @csrf
                <!-- Modal header -->
                <div class="flex items-center p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-[20px] font-semibold text-[#2C2C2C] text-center mx-auto">
                        Pengajuan Lamaran
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <input type="hidden" name="lowongan_id" value="{{ $detailVacancy->id }}">
                    <div class="grid lg:grid-cols-2 grid-cols-l">
                        <div>
                            <div class="mb-[12px] font-medium text-[#606060]">
                                File Resume CV
                            </div>
                            <div class="flex gap-[16px]">
                                <input type="file" id="riwayat" name="dokumen_riwayat" class="">
                                {{-- <div id="file-riwayat-display" class="p-2 border w-[328px] h-[48px] bg-[#F7F7F7] rounded-[6px]"></div>
                                <div class="flex items-center">
                                    <label for="file-riwayat" class="bg-[#4176CF] text-[12px] font-medium text-white px-4 py-2 rounded cursor-pointer">
                                        Pilih File
                                    </label>     
                                </div>   --}}                                                  
                            </div>
                        </div>
                        <div>
                            <div class="mb-[12px] font-medium text-[#606060]">
                                File Transkrip CV
                            </div>
                            <div class="flex gap-[16px]">
                                <input type="file" id="transkrip" name="dokumen_transkrip" class="">
                                {{-- <div id="file-riwayat-display" class="p-2 border w-[328px] h-[48px] bg-[#F7F7F7] rounded-[6px]"></div>
                                <div class="flex items-center">
                                    <label for="file-riwayat" class="bg-[#4176CF] text-[12px] font-medium text-white px-4 py-2 rounded cursor-pointer">
                                        Pilih File
                                    </label>     
                                </div>   --}}                                                  
                            </div>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 grid-cols-l">
                        <div>
                            <div class="mb-[12px] font-medium text-[#606060]">
                                File Lamaran
                            </div>
                            <div class="flex gap-[16px]">
                                <input type="file" id="lamaran" name="dokumen_lamaran" class="">
                                {{-- <div id="file-lamaran-display" class="p-2 border w-[328px] h-[48px] bg-[#F7F7F7] rounded-[6px]"></div>
                                <div class="flex items-center">
                                    <label for="file-lamaran" class="bg-[#4176CF] text-[12px] font-medium text-white px-4 py-2 rounded cursor-pointer">
                                        Pilih File
                                    </label>     
                                </div>       --}}                                              
                            </div>
                        </div>
                        <div>
                            <div class="mb-[12px] font-medium text-[#606060]">
                                File Pendukung
                            </div>
                            <div class="flex gap-[16px]">
                                <input type="file" id="tambahan" name="dokumen_tambahan" class="">
                                {{-- <div id="file-name-display" class="p-2 border w-[328px] h-[48px] bg-[#F7F7F7] rounded-[6px]"></div>
                                <div class="flex items-center">
                                    <label for="file-upload" class="bg-[#4176CF] text-[12px] font-medium text-white px-4 py-2 rounded cursor-pointer">
                                        Pilih File
                                    </label>     
                                </div>  --}}                                                   
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-between p-4 md:p-5 border-t border-gray-200 rounded-b ">
                    <button data-modal-hide="vacancyForm" type="button" class="text-white bg-[#DC3545] hover:bg-red-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-[32px] py-[16px] text-center flex items-center gap-[16px]">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 12H5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 19L5 12L12 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                            
                        Batal
                    </button>
                    <button type="submit" class="text-white bg-[#198754] hover:bg-green-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-[32px] py-[16px] text-center flex items-center gap-[16px]">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.2158 21H5.21582C4.68539 21 4.17668 20.7893 3.80161 20.4142C3.42653 20.0391 3.21582 19.5304 3.21582 19V5C3.21582 4.46957 3.42653 3.96086 3.80161 3.58579C4.17668 3.21071 4.68539 3 5.21582 3H16.2158L21.2158 8V19C21.2158 19.5304 21.0051 20.0391 20.63 20.4142C20.255 20.7893 19.7463 21 19.2158 21Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.2158 21V13H7.21582V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.21582 3V8H15.2158" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                                                    
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection