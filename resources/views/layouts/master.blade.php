<!DOCTYPE html>
<html lang="en">
  @include('partials.head')

  <body>
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/retina-1.1.0.js"></script>
  </body>
</html>
