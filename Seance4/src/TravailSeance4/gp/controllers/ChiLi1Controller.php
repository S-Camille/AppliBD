<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\ChiLi1View;
use gamepedia\gp\models\Character;

class ChiLi1Controller {

	public function __construct() {
		$persos = Character::select('name')->with('premjeu')->whereHas('premjeu', function($q){
			$q->where('game.name', 'like', '%Mario%');
		})->get();
	}

	public function affCh1() {
		$rv = new ChiLi1View();
		$rv->renderAll();
	}

}