<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <!-- <div>
            <img src="{{ asset('') }}assets/images/logo_ncc 1.png" class="logo-icon" alt="logo icon">
        </div> -->
        <div>
            <p class="pt-3">Narotama<br>Career Career</p>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
 
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>

            </li>

            <li class="menu-label">Master User</li>
            <li>
                <a href="{{ url('admin/admin') }}">
                    <div class="parent-icon"><i class="bx bx-user-circle"></i>
                    </div>
                    <div class="menu-title">Data Admin</div>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/mahasiswa') }}">
                    <div class="parent-icon"><i class="bx bx-user-circle"></i>
                    </div>
                    <div class="menu-title">Data Mahasiswa</div>
                </a>
            </li>

            <li class="menu-label">Master Berita</li>
            <li>
                <a href="{{ url('admin/beritas') }}">
                    <div class="parent-icon"><i class="bx bx-news"></i>
                    </div>
                    <div class="menu-title">Berita</div>
                </a>
            </li>

            <li class="menu-label">Master Pelatihan</li>
            <li>
                <a href="{{ url('admin/kategoripelatihans') }}">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Kategori Pelatihan</div>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/pelatihans') }}">
                    <div class="parent-icon"><i class="bx bx-bookmarks"></i>
                    </div>
                    <div class="menu-title">Pelatihan</div>
                </a>
            </li>

            <li class="menu-label">Master Lowongan</li>
            <li>
                <a href="{{ url('admin/kategorilowongans') }}">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Kategori Lowongan</div>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/lowongans') }}">
                    <div class="parent-icon"><i class="bx bx-briefcase"></i>
                    </div>
                    <div class="menu-title">Lowongan</div>
                </a>
            </li>

            <li class="menu-label">Master Pendaftaran</li>
            <li>
                <a href="{{ url('admin/peserta') }}">
                    <div class="parent-icon"><i class="bx bx-user-pin"></i>
                    </div>
                    <div class="menu-title">Peserta</div>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/lamaran') }}">
                    <div class="parent-icon"><i class="bx bx-user-pin"></i>
                    </div>
                    <div class="menu-title">Lamaran</div>
                </a>
            </li>


            


        </ul>
  

    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
