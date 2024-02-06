
@include('layouts.styles')
  <!-- ======= Header ======= -->
    @include('layouts.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('layouts.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">
    @yield('content')
  </main>

 
  @include('layouts.scripts')
  <!-- End #main -->



 