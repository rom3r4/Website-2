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
            !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
            arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
            d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
            insertBefore(d,q)}(window,document,'script','_gs');
            _gs('GSN-247567-S');
        </script>
    </body>
</html>
