@extends('layouts.master')

@section('content')
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered">
                <h1>Beautiful &amp; simple service statuses.</h1>
                <h2>An open source status page system, for everyone.</h2>
                <a class="btn btn-conf btn-green" href="https://github.com/cachethq/Cachet/archive/master.zip" rel="download"><i class='ion-social-github'></i> Download from GitHub</a>
                <a class="btn btn-conf btn-clear" href="https://demo.cachethq.io">See the demo</a>
            </div>
        </div>
    </div>
</header>

<section class="grey">
    <div class="container">
        <div class="row centered">
            <div class="col-sm-2 col-sm-offset-1 love">
                <img src="/img/used-by/blue-bay-travel.png">
            </div>
            <div class="col-sm-2 love">
                <img src="/img/used-by/styleci.png">
            </div>
            <div class="col-sm-2 love">
                <img src="/img/used-by/blackpulsehosting.png">
            </div>
            <div class="col-sm-2 love">
                <img src="/img/used-by/shoutcast.png">
            </div>
            <div class="col-sm-2 love">
                <img src="/img/used-by/beachfront-host.png">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mtb">
            <div class="col-md-12 centered">
                <h2 title="Have a look at this">Have a dekko</h2>
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
                        <span class="feature-icon">
                            <i class="ion-heart"></i>
                        </span>
                        <h3 class="mb">Beautifully crafted</h3>
                        <p>Cachet has been beautifully built, both by design and code. Using Bootstrap 3, Cachet is completely responsive and works perfectly on mobile, tablet and desktop devices.</p>
                        <p>Not only is Cachet beautiful on the outside, but the inside too. The code is concise and easy to understand, portraying the right way to architect a web app.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="feature-icon">
                            <i class="ion-earth"></i>
                        </span>
                        <h3 class="mb">Supported in several languages</h3>
                        <p>We want to make it possible for anybody to use Cachet, not just the English speakers. Cachet supports several languages straight away, with more translations being worked on every day.</p>
                        <p>Thank you to CrowdIn for supplying us with the platform to translate Cachet.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="feature-icon">
                            <i class="ion-wand"></i>
                        </span>
                        <h3 class="mb">JSON API</h3>
                        <p>Sometimes it's just not possible to manually update your status page with incidents and component status changes, we totally get that.</p>
                        <p>That's why Cachet is bundled with a simple to use, secure API system.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <span class="feature-icon">
                            <i class="ion-settings"></i>
                        </span>
                        <h3 class="mb">Scheduled maintenance</h3>
                        <p>It can't be avoided, sometimes you just need to perform maintenance. With Cachet, you can schedule these events ahead of time.</p>
                        <p>Once the maintenance time has passed, the incident drops into the timeline for prosperity.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="feature-icon">
                            <i class="ion-stats-bars"></i>
                        </span>
                        <h3 class="mb">Metrics</h3>
                        <p>Within the Dashboard you're able to setup metrics - a measurement of something. Using the API you can then send the metric a "point" or a measurement of the metric.</p>
                        <p>This is great for displaying your number of Visitors, or new sign ups etc.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="feature-icon">
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

<section class="primary-green subscribe">
    <div class="container">
        <div class="row centered">
            <h2>Don't miss anything. Subscribe to be updated.</h2>

            <div class="col-md-6 col-md-offset-3 mts">
                <form role='form' action="//cachethq.us9.list-manage.com/subscribe/post?u=654f358550ef074d6601475cd&amp;id=711cf8b66d" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                    <label for="mce-EMAIL" class='sr-only'>Email Address  <span class="asterisk">*</span></label>
                    <input type="email" value="" required name="EMAIL" class="subscribe-input" id="mce-EMAIL" placeholder="joe@cachet-rocks.io">

                    <button type="submit" class='btn btn-conf btn-clear' name="subscribe" id="mc-embedded-subscribe">Sign up</button>

                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_654f358550ef074d6601475cd_711cf8b66d" tabindex="-1" value=""></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
