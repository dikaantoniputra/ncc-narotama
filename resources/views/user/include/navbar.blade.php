@php
   use Illuminate\Support\Facades\URL;
@endphp
<header>
    {{-- Dekstop Navbar --}}
    <nav class="flex py-[28px] px-[80px] justify-between max-sm:hidden max-md:hidden border-b-[#C7C7C7] border-[0.5px]">
        <div id="logo" class="">
            <img src="{{ asset('') }}../assets/images/logo_ncc 1.png" alt="">
        </div>
        <ul class="flex gap-[60px] my-auto font-bold text-[#444]  ">
            <a href="{{ url('/') }}" class="hover:text-[#4176CF] {{ request()->is('/') ? 'text-[#4176CF]' : ''}}">Home</a>
            <a href="{{ url('/berita') }}" class="hover:text-[#4176CF] {{ request()->is('berita') ? 'text-[#4176CF]' : ''}}">Berita</a>
            <a href="{{ url('/pelatihan') }}" class="hover:text-[#4176CF] {{ request()->is('pelatihan') ? 'text-[#4176CF]' : ''}}">Pelatihan</a>
            <a href="{{ url('/lowongan') }}" class="hover:text-[#4176CF] {{ request()->is('lowongan') ? 'text-[#4176CF]' : ''}}">Lowongan</a>
        </ul>
        @if (auth()->check())
          <button type="button" id="profileButton" class="flex my-auto justify-center">
            <img src="../../assets/images/navbar-images/icon-profile-navbar.png" class="flex my-auto justify-center" alt="Icon Profile">
          </button>
        
          <!-- Dropdown Content -->
          <div id="profileDropdown" class="absolute right-[10px] top-20 mt-2 w-40 bg-white rounded-md shadow-lg origin-top-right ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
              <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="dashboard">Dashboard</a>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="logout">Logout</button>
              </form>
            </div>
          </div>
        @else
          <a href="{{ route('login') }}" class="my-auto bg-[#4176CF] text-white px-[20px] py-[10px] rounded-[7px] flex justify-center items-center">Masuk</a>
        @endif
    </nav>

    {{-- Navbar Mobile --}}
    <nav class="lg:hidden md:hidden">
        <div class="flex p-[20px] justify-between">
            <img src="../assets/images/logo_ncc 1.png" alt="Logo NCC">
            <button type="button" id="mobileMenuButton" class="flex my-auto" data-collapse-toggle="mobileNavbar" aria-controls="mobileNavbar" aria-expanded="false">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 12H21" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 6H21" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 18H21" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
            </button>
        </div>
        <div class="hidden w-full md:block md:w-auto" id="mobileMenu">
            <ul class="font-medium flex flex-col p-4 md:p-0 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
              <li>
                <a href="{{ url('/') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ request()->is('/') ? 'text-[#4176CF]' : ''}}">Home</a>
              </li>
              <li>
                <a href="{{ url('/berita') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ request()->is('berita') ? 'text-[#4176CF]' : ''}}">Berita</a>
              </li>
              <li>
                <a href="{{ url('/pelatihan') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ request()->is('pelatihan') ? 'text-[#4176CF]' : ''}}">Pelatihan</a>
              </li>
              <li>
                <a href="{{ url('/lowongan') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ request()->is('lowongan') ? 'text-[#4176CF]' : ''}}">Lowongan</a>
              </li>
              @can ('Admin')
              <li>
                <a href="{{ url('/dashboard') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ request()->is('dashboard') ? 'text-[#4176CF]' : ''}}">Dashboard</a>
              </li>
              @endcan
              @if (auth()->check())
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="block py-2 px-3 text-white rounded hover:bg-gray-100 bg-red-500">Logout</button>
                  </form>
                </li>
              @else
                <li>
                  <div>
                    <a href="{{ route('login') }}" type="submit" class="block py-2 px-3 text-white rounded hover:bg-gray-100 bg-blue-500">Masuk</a>
                  </div>
                </li>
              @endif
            </ul>
        </div>
    </nav>
</header>
<script>
  // JavaScript
  const profileButton = document.getElementById('profileButton');
  const profileDropdown = document.getElementById('profileDropdown');

  // Function to toggle dropdown visibility
  function toggleDropdown() {
    profileDropdown.classList.toggle('hidden');
  }

  // Event listener to show/hide dropdown on button click
  profileButton.addEventListener('click', toggleDropdown);

  // Close dropdown if clicked outside of it
  window.addEventListener('click', function(event) {
    if (!profileButton.contains(event.target)) {
      profileDropdown.classList.add('hidden');
    }
  });
</script>