<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

	{{-- Brand and toggle get grouped for better mobile display --}}
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		@if ($brandTitle)
		<a class="navbar-brand" href="{{ Config::get('laravel-backend-layout::brand_title_link') }}">
			{{ $brandTitle }}
		</a>
		@endif
	</div>

	{{-- Collect the nav links, forms, and other content for toggling --}}
	<div class="collapse navbar-collapse navbar-ex1-collapse">

		<ul class="nav navbar-nav">
			{{  \Djordje\LaravelTwbsHelpers\Facades\TwbsNav::build(Config::get('laravel-backend-layout::navbar_links')) }}
		</ul>

		@yield('navbar_hook')

		@if ($userDropdown = Config::get('laravel-backend-layout::navbar_user_dropdown'))
			@include($userDropdown)
		@endif

	</div>

</nav>