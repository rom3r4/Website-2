@extends('layouts.master')

@section('content')
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered">
                <h1>Beautiful &amp; simple service statuses.</h1>
                <h2>An open source status page system, for everyone.</h2>
                <a class="btn btn-conf btn-green" href="https://github.com/cachethq/cachet" target="_blank"><i class='ion-social-github'></i> View on GitHub</a>
                <a class="btn btn-conf btn-clear" href="https://demo.cachethq.io" target="_blank">See the demo</a>
            </div>
        </div>
    </div>
</header>

<section class="grey">
    <div class="container">
        <div class="row centered">
            <div class="col-sm-2 love">
                <img src="/img/used-by/blue-bay-travel.png">
            </div>
            <div class="col-sm-2 love">
                <img src="/img/used-by/styleci.png">
            </div>
            <div class="col-sm-2 love">
                <img src="/img/used-by/mozilla.png">
            </div>
            <div class="col-sm-2 love">
                <img src="/img/used-by/blackpulsehosting.png">
            </div>
            <div class="col-sm-2 love">
                <img src="/img/used-by/jumplead.png">
            </div>
            <div class="col-sm-2 love">
                <img src="/img/used-by/shoutcast.png">
            </div>
        </div>
    </div>
</section>

@include('partials.newsletter', ['condensed' => true])

<section>
    <div class="container">
        <div class="row mtb">
            <div class="col-md-12 centered">
                <h2 title="Have a dekko at this">Have a dekko at this</h2>
                <hr class="aligncenter mb">
                <img class="img-responsive aligncenter" src="/img/main-interface.jpg">
            </div>
        </div>
    </div>
</section>

<section class="grey features">
    <div class="container">
        <div class="row">
            <h2 class="centered">What's it all about?</h2>
            <hr class="aligncenter mb">

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="feature-icon hidden-xs">
                            <i class="ion-heart"></i>
                        </span>
                        <h3 class="mb">Beautifully crafted</h3>
                        <p>Cachet has been beautifully built, both by design and code. Using Bootstrap 3, Cachet is completely responsive and works perfectly on mobile, tablet and desktop devices.</p>
                        <p>Not only is Cachet beautiful on the outside, but the inside too. The code is concise and easy to understand, portraying the right way to architect a web app.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="feature-icon hidden-xs">
                            <i class="ion-earth"></i>
                        </span>
                        <h3 class="mb">Supported in several languages</h3>
                        <p>We want to make it possible for anybody to use Cachet, not just the English speakers. Cachet supports several languages straight away, with more translations being worked on every day.</p>
                        <p>Thank you to CrowdIn for supplying us with the platform to translate Cachet.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="feature-icon hidden-xs">
                            <i class="ion-wand"></i>
                        </span>
                        <h3 class="mb">JSON API</h3>
                        <p>Sometimes it's just not possible to manually update your status page with incidents and component status changes, we totally get that.</p>
                        <p>That's why Cachet is bundled with a simple to use, secure API system.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <span class="feature-icon hidden-xs">
                            <i class="ion-settings"></i>
                        </span>
                        <h3 class="mb">Scheduled maintenance</h3>
                        <p>It can't be avoided, sometimes you just need to perform maintenance. With Cachet, you can schedule these events ahead of time.</p>
                        <p>Once the maintenance time has passed, the incident drops into the timeline for posterity.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="feature-icon hidden-xs">
                            <i class="ion-stats-bars"></i>
                        </span>
                        <h3 class="mb">Metrics</h3>
                        <p>Within the Dashboard you're able to setup metrics - a measurement of something. Using the API you can then send the metric a "point" or a measurement of the metric.</p>
                        <p>This is great for displaying your number of Visitors, or new sign ups etc.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="feature-icon hidden-xs">
                            <i class="ion-key"></i>
                        </span>
                        <h3 class="mb">Two-factor authentication</h3>
                        <p>Need some extra security on your account? No problem, you can lock your account with Two-factor authentication.</p>
                        <p>Compatible with the Google Authenticator app.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mtb">
            <div class="col-md-12 centered">
                <h2 title="Decisions we make for you">Decisions we make for you</h2>
                <hr class="aligncenter mb">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item">Component statuses are hard set.</li>
                        <li class="list-group-item">Incident types are also hard set.</li>
                        <li class="list-group-item">The <a href="http://laravel.com">Laravel framework</a> is used.</li>
                        <li class="list-group-item">Google Authenticator is used for Two Factor Authentication.</li>
                        <li class="list-group-item">A minimal Dockerfile is provided.</li>
                        <li class="list-group-item">Bootstrap is used for design.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.newsletter')
@endsection
