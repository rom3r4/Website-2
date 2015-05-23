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

        <script>
        (function ($) {
            $('a[rel=github]').on('click', function () {
                _gs('event', 'GitHub');
            });

            $('a[rel=demo]').on('click', function () {
                _gs('event', 'Demo');
            });
        }(jQuery));
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-58442674-4', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
