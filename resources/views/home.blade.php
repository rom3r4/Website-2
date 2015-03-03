@extends('layouts.master')

@section('content')
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Cachet keeps your <strong>customers</strong>, <strong>developers</strong> &amp; <strong>share-holders</strong> up to date with your products status.</h1>
                <a class="btn btn-conf btn-green" href="#">Learn More</a>
                <a class="btn btn-conf btn-clear" href="https://github.com/cachethq/Cachet/archive/master.zip"><i class='ion-social-github'></i> Download from GitHub</a>
            </div>
        </div>
    </div>
</header>

<section class="green">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4><i class="ion-social-github"></i> Open Source</h4>
                <p>Cachet is 100% open source, opening a whole world of contributions and new features.</p>
            </div>
            <div class="col-md-4">
                <h4><i class="ion-heart"></i> Beautiful</h4>
                <p>From the status page, to the dashboard, right through to the code itself. Cachet is beautifully crafted everywhere.</p>
            </div>
            <div class="col-md-4">
                <h4><i class="ion-planet"></i> Multilingual</h4>
                <p>Cachet speaks several languages <strong>and</strong> you can contribute to existing translations or provide new ones from within Cachet itself.</p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row mtb">
        <div class="col-md-12">
            <img class="img-responsive aligncenter" src="/img/main-interface.jpg">
        </div>
    </div>
</div>

<section class="grey text-heavy clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 content">
                <h1 class="text-center">Trusted by&hellip;</h1>
                <div class="col-sm-4 feature">
                    <img src="{!! asset('img/used-by/styleci.png') !!}" width="320">
                </div>
                <div class="col-sm-4 feature">
                    <img src="{!! asset('img/used-by/styleci.png') !!}" width="320">
                </div>
                <div class="col-sm-4 feature">
                    <img src="{!! asset('img/used-by/styleci.png') !!}" width="320">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
