<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\AffJeuxMarioCompIncRating3View;
use gamepedia\gp\models\Game;

class AffJeuxMarioCompIncRating3Controller {

	private $g;

	public function __construct() {
		$this->g = '';
	}

	public function listerJeuxMarioCompIncRating3() {
		$av = new AffJeuxMarioCompIncRating3View();
		foreach (Game::where('name', 'like', 'Mario%')->whereHas('rating', function($q){
			$q->where('name', 'like', '%3+%');
		})->whereHas('publisher', function($q) {
			$q->where('name', 'like', '%Inc.%');
		})->get() as $game) {
			$this->g = $this->g.$game->name."<br>";
		}
		echo $av->renderAll($this->g);
	}

}