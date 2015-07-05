<?php

namespace Lovettb\Validation;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider {

	public function register() {
		$this->app->bind('validation', 'Lovettb\Validation\ValidatorService');
	}

}
