<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Req4View;
use gamepedia\gp\models\Game;
use gamepedia\gp\models\Game2Character;
use gamepedia\gp\models\Character;

class Req4Controller {

	public function __construct() {
		$g4 = Game::select('id')->where('name', 'like', '%Mario%')->get();
		$gc = Game2Character::whereIn('game_id', $g4)->distinct()->get();
		$ch = Character::whereIn('id', $gc)->get();
	}

	public function affReq4() {
		$rv = new Req4View();
		$rv->renderAll();
	}

}