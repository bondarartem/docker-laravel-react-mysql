<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
		if (env('SECURE_CONNECTION', false))
			$this->app['request']->server->set('HTTPS', true);
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		//
		error_reporting(E_ALL ^ E_NOTICE);
	}

}
