<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\ChiLi2View;
use gamepedia\gp\models\Game;

class ChiLi2Controller {

	public function __construct() {
		/*$c = Game::whereHas('developer', function ($query) {
   			$query->where('company.name', 'like', '%Sony%');
		})->take(5)->get();*/
		$c = Game::with('developer')->whereHas('developer', function ($query) {
   			$query->where('company.name', 'like', '%Sony%');
		})->get();
	}

	public function affCh2() {
		$rv = new ChiLi2View();
		$rv->renderAll();
	}

}