<!doctype html>
<html lang="{{ Config::get('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		@section('title')
			@if (isset($pageTitle))
				{{ $pageTitle }}
			@endif
		@show
		@if ($brandTitle = Config::get('laravel-backend-layout::brand_title'))
			| {{ $brandTitle }}
		@endif
	</title>

	{{ HTML::style(Config::get('laravel-backend-layout::package_asset_path').'/css/bootstrap.min.css') }}
	{{ HTML::style(Config::get('laravel-backend-layout::package_asset_path').'/css/bootstrap-theme.min.css') }}
	{{ HTML::style(Config::get('laravel-backend-layout::package_asset_path').'/css/backend-theme.css') }}

	@foreach (Config::get('laravel-backend-layout::css') as $link)
		{{ HTML::style($link) }}
	@endforeach

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		{{ HTML::script(Config::get('laravel-backend-layout::package_asset_path').'/js/lib/html5shiv.js') }}
		{{ HTML::script(Config::get('laravel-backend-layout::package_asset_path').'/js/lib/respond.min.js') }}
	<![endif]-->

	{{ HTML::script(Config::get('laravel-backend-layout::package_asset_path').'/js/lib/jquery-1.10.2.min.js') }}
	{{ HTML::script(Config::get('laravel-backend-layout::package_asset_path').'/js/lib/bootstrap.min.js') }}
	{{ HTML::script(Config::get('laravel-backend-layout::package_asset_path').'/js/lib/bootbox.min.js') }}
	{{ HTML::script(Config::get('laravel-backend-layout::package_asset_path').'/js/backend-helper.js') }}

	@foreach (Config::get('laravel-backend-layout::js') as $link)
		{{ HTML::script($link) }}
	@endforeach

	@yield('head_hook')
</head>
<body>

	@if ($navbar = Config::get('laravel-backend-layout::navbar'))
		@include($navbar)
	@endif

	<div class="clearfix">

		<div class="col-md-3">
			@yield('left_col')
		</div>
		<div class="col-md-9">
			@yield('content')
		</div>

	</div>

</body>
</html>
