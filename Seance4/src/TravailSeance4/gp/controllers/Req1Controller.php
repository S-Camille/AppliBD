<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Req1View;
use gamepedia\gp\models\Game;

class Req1Controller {

	public function __construct() {
		Game::where('name', 'like', '%Mario%')->get();
	}

	public function affReq1() {
		$rv = new Req1View();
		$rv->renderAll();
	}

}