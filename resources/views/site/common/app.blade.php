{{-- Main Layout --}}
<!DOCTYPE html>
<html lang="en">

  @include('site.common.head')

  <body>

    @include('site.common.navigation')

    @yield('content')

    @include('site.common.footer')
    
  </body>
</html>