<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="../assets/images/logo_ncc 1.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <p class="pt-3 text-blue-500">NAROTAMA CAREER CENTER</p>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
 
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ url('/admin') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>

            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">DATA USER</div>
                </a>
                <ul>
                    {{-- <li> <a href="{{ url('user') }}"><i class="bx bx-right-arrow-alt"></i>Data User</a>
                    </li> --}}
                    <li> <a href="{{ url('admin/mahasiswa') }}"><i class="bx bx-right-arrow-alt"></i>Data Siswa</a>
                    </li>
                    <li> <a href="{{ url('admin/admin') }}"><i class="bx bx-right-arrow-alt"></i>Data Admin</a>
                    </li>

                </ul>
            </li>

            <li class="menu-label">Master Berita</li>
            <li>
                <a href="{{ url('admin/beritas') }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Berita</div>
                </a>
            </li>

            <li class="menu-label">Master Pelatihan</li>
            <li>
                <a href="{{ url('admin/kategoripelatihans') }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Ketegori</div>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/pelatihans') }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Pelatihan</div>
                </a>
            </li>

            <li class="menu-label">Master Lowongan</li>
            <li>
                <a href="{{ url('admin/kategorilowongans') }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Ketegori</div>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/lowongans') }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Lowongan</div>
                </a>
            </li>


            


        </ul>
  

    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
