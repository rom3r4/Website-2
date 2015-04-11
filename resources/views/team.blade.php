@extends('layouts.master')

@section('content')
<section class="grey">
    <div class="container">
        <div class="row centered">
            <h2>Meet the team!</h2>
            <hr class="aligncenter">
            <h3>Meet the people behind Cachet.</h3>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row centered">
            <div class="col-xs-12 col-md-4">
                <img src="https://www.gravatar.com/avatar/13616b6551a3854378f9e6fea964e519?s=120" height="100%" class="img-circle" alt="">
                <h3>James Brooks</h3>
                <h4>Founder</h4>
                <h3>
                    <a href="https://twitter.com/jbrooksuk" target="_blank"><i class="icon ion-social-twitter"></i></a>
                    <a href="https://github.com/jbrooksuk" target="_blank"><i class="icon ion-social-github"></i></a>
                    <a href="https://james-brooks.uk" target="_blank"><i class="icon ion-earth"></i></a>
                </h3>
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="https://www.gravatar.com/avatar/b19a7e3567c963fe3116e140ab12b8c0?s=120" height="100%" class="img-circle" alt="">
                <h3>Joe Cohen</h3>
                <h4>Donator &amp; Developer</h4>
                <h3>
                    <a href="https://twitter.com/joecohens" target="_blank"><i class="icon ion-social-twitter"></i></a>
                    <a href="https://github.com/joecohens" target="_blank"><i class="icon ion-social-github"></i></a>
                    <a href="https://joecohens.com" target="_blank"><i class="icon ion-earth"></i></a>
                </h3>
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="https://www.gravatar.com/avatar/838bf3ed69d559cb46956c509c9464af?s=120" height="100%" class="img-circle" alt="">
                <h3>Graham Campbell</h3>
                <h4>Developer</h4>
                <h3>
                    <a href="https://twitter.com/GrahamCampbell" target="_blank"><i class="icon ion-social-twitter"></i></a>
                    <a href="https://github.com/GrahamCampbell" target="_blank"><i class="icon ion-social-github"></i></a>
                    <a href="https://grahamjcampbell.co.uk" target="_blank"><i class="icon ion-earth"></i></a>
                </h3>
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
