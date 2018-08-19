<?php

namespace App;

use Slim\Handlers\Strategies\RequestResponseArgs;

class Container extends \Slim\Container
{
	public function __construct()
	{
		parent::__construct([
			'settings' => [
				'routerCacheFile' => __DIR__ . '/../temp/route.cache'
			],
			'foundHandler' => function() {
				return new RequestResponseArgs();
			},
		]);

		$this->createServices();
	}

	private function createServices()
	{
		$this['logger'] = function() {

		};

	}

}
