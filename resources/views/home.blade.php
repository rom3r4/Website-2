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

<section class="grey side-image text-heavy clearfix">
	<div class="image-container col-md-5 col-sm-3 pull-left">
		<div class="background-image-holder">
			<img class="background-image" alt="Background Image" src="/img/side.jpg">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4 content clearfix">
				<h1>Who are we?</h1>
				<p class="lead">Cachet is built by a team of three core developers, but with contributions from some amazing people!</p>
				<div class="col-sm-4 no-pad-left feature">
					<h5>James Brooks</h5>
					<p>Some info about James.</p>
				</div>
				<div class="col-sm-4 no-pad-left feature">
					<h5>Joe Cohen</h5>
					<p>Some info about Joe.</p>
				</div>
				<div class="col-sm-4 no-pad-left feature">
					<h5>Graham Campbell</h5>
					<p>Some info about Graham.</p>
				</div>
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
@endsection
