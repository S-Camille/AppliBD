<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Req3View;
use gamepedia\gp\models\Character;

class Req3Controller {

	public function __construct() {
		$persos = Character::select('name')->whereHas('premjeu', function($q){
			$q->where('game.name', 'like', '%Mario%');
		})->get();
	}

	public function affReq3() {
		$rv = new Req3View();
		$rv->renderAll();
	}

}