<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Platform;
use gamepedia\gp\views\PlatformSupView;

class PlatformSupController {

	private $plat;
	private $baseSup = '10 000 000';

	public function __construct() {
		$this->plat = Platform::where('install_base', '>=', $this->baseSup)->get();
	}

	public function listerPlatformSupA() {
		$psv = new PlatformSupView();
		echo $psv->renderAll($this->plat);
	}

}