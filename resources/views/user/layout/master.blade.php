
<!DOCTYPE html>
<html lang="en">
    <head>
      @stack('before-style')
      @include('user.include.head')
      @stack('after-style')
    </head>

    <!-- body start -->
    <body onload="info_noti()" class="font-poppins">

        <!-- Begin page -->

            <!-- Topbar Start -->
              @include('user.include.navbar')
            <!-- end Topbar -->

            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         

              @yield('content')


            

         @include('user.include.footer')
	
        
        @stack('before-script')
          @include('user.include.script')
        @stack('after-script')


        @yield('third-party-js')

        <!-- init js-->
        @yield('init-js')
    </body>
</html>