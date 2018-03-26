<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Req5View;
use gamepedia\gp\models\Company;
use gamepedia\gp\models\Game_Developers;
use gamepedia\gp\models\Game;

class Req5Controller {

	public function __construct() {
		$c = Company::where('name', 'like', '%Sony%')->get();
		$gd = Game_Developers::whereIn('comp_id', $c)->get();
		$g5 = Game::whereIn('id', $gd)->get();
	}

	public function affReq5() {
		$rv = new Req5View();
		$rv->renderAll();
	}

}