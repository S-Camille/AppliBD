<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\ChiLi2View;
use gamepedia\gp\models\Game;

class ChiLi2Controller {

	public function __construct() {
		$c = Game::select('name')->with('developer')->whereHas('developer', function($q){
			$q->where('company.name', 'like', '%Sony%');
		})->get();
	}

	public function affCh2() {
		$rv = new ChiLi2View();
		$rv->renderAll();
	}

}