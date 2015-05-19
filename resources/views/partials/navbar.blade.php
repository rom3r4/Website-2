<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img class='img-responsive' src='/img/logo.png' width='175'>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <li>
                    <a href="https://blog.cachethq.io">
                        Blog
                        @if($recentArticles > 0)
                        <span class="badge badge-info">{{ $recentArticles }}</span>
                        @endif
                    </a>
                </li>
                <li><a href="https://docs.cachethq.io">Documentation</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
