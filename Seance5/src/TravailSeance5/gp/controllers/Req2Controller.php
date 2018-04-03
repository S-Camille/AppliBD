<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Req2View;
use gamepedia\gp\models\Game;

class Req2Controller {

	public function __construct() {
		Game::select('name')->where('id', '=', 12342)->first()->character;
	}

	public function affReq2() {
		$rv = new Req2View();
		$rv->renderAll();
	}

}