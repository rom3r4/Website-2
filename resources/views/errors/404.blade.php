@extends('layouts.master')

@section('content')
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered">
                <h1>Woah. We couldn't find that page!</h1>
                <a class="btn btn-conf btn-green" href="https://github.com/cachethq/Cachet/archive/master.zip" rel="download"><i class='ion-social-github'></i> Download from GitHub</a>
                <a class="btn btn-conf btn-clear" href="https://demo.cachethq.io">See the demo</a>
            </div>
        </div>
    </div>
</header>

<section class="grey">
    <div class="container">
        <div class="row centered">
            <h2>Tweet us @cachethq if you believe this to be a mistake.</h2>
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
