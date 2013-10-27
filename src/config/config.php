<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Brand title
	|--------------------------------------------------------------------------
	|
	| This will be concatenated to page title eg. 'Home | Backend Title'.
	| And will be used in default navbar partial as brand title.
	| You can disable it by setting this value to `null`, `false` or `''`.
	|
	*/
	'brand_title' => 'Laravel Backend',

	/*
	|--------------------------------------------------------------------------
	| Brand title link
	|--------------------------------------------------------------------------
	|
	| This will be used in default navbar to create link for brand title.
	| You can set it to home page or backend index.
	|
	*/
	'brand_title_link' => '#',

	/*
	|--------------------------------------------------------------------------
	| Navbar partial
	|--------------------------------------------------------------------------
	|
	| By default this package use provided `_navbar` partial.
	| You can override it by passing identifier for desired view here.
	|
	*/
	'navbar' => 'laravel-backend-layout::_navbar',

	/*
	|--------------------------------------------------------------------------
	| Navbar links
	|--------------------------------------------------------------------------
	|
	| Array of links that will be rendered in default navbar partial.
	| This should be compatible with:
	| @see \Djordje\LaravelTwbsHelpers\Html\Navbar\NavBuilder::build()
	|
	*/
	'navbar_links' => array(),

	/*
	|--------------------------------------------------------------------------
	| Navbar user dropdown
	|--------------------------------------------------------------------------
	|
	| By default this package doesn't provided this partial.
	| You should create it and setup view identifier here.
	|
	*/
	'navbar_user_dropdown' => '',

	/*
	|--------------------------------------------------------------------------
	| Package asset path
	|--------------------------------------------------------------------------
	|
	| This package contains necessary assets that must be published to your
	| app's public before use.
	| This is sensible defaults, and you should change it just in case
	| you publish package with custom name,
	|
	*/
	'package_asset_path' => '/packages/djordje/laravel-backend-layout',

);