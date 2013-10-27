## Laravel Backend Layout

Simple backend layout based on Twitter Bootstrap 3 for rapid backend view creation.

##### Installation

Recommended installation is trough *composer*, add to your `composer.json`:

```json

"require": {
	"djordje/laravel-backend-layout": "dev-master"
}

```

Add service provider to your `app/config/app.php` file:

```php

# ...

'providers' => array(
    # ...
    'Djordje\LaravelBackendLayout\LaravelBackendLayoutServiceProvider',
),

# ...

```

Publish package configuration:

```sh

php artisan config:publish djordje/laravel-backend-layout

```

Publish package assets:

```sh

php artisan asset:publish djordje/laravel-backend-layout

```


##### Usage

**Use it in your view:**

```php

@extends('laravel-backend-layout::default')

{{-- Optional --}}
@section('title')
My page title
@stop

{{-- Optional --}}
@section('head_hook')
<!-- Your custom CSS, JS or meta data for <head> section -->
@stop

{{-- Optional --}}
@section('navbar_hook')
<!-- Your custom additional content for navbar, usualy some menu links or search form -->
@stop

@section('left_col')
<!-- Content for left column, usualy menu navigation for current controller -->
{{  \Djordje\LaravelTwbsHelpers\Facades\TwbsListGroup::build(array('items' => array(
	array('Index', 'href' => route('controller.index')),
	array('Add', 'href' => route('controller.add')),
	array('Help', 'href' => route('controller.help'))
))) }}
@stop

@section('content')
<!-- Your view -->

<table class="table table-hover-table-bordered table-striped">
	<thead>
		<!-- ... -->
	</thead>
	<tbody>
		<!-- ... -->
	</tbody>
</table>
@stop

```

** User dropdown partial template:**

You can create your custom dropdown to match your routes and auth system!

```html

<ul class="nav navbar-nav pull-right">
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<!-- User name or avatar -->
			<b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
			<!-- User links -->
			<li>
				<a href="/signout">
					<i class="glyphicon glyphicon-log-out"></i> Sign out!
				</a>
			</li>
		</ul>
	</li>
</ul>

```

###### Released under MIT Licence