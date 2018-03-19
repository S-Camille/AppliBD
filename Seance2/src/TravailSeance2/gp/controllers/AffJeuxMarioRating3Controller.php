<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\AffJeuxMarioRating3View;
use gamepedia\gp\models\Game;

class AffJeuxMarioRating3Controller {

	private $lj;

	public function __construct() {
		$this->lj='';
	}

	public function listerJeuxMarioRating3() {
		$av = new AffJeuxMarioRating3View();
		foreach (Game::where('name', 'like', 'Mario%')->whereHas('rating', function($q){
			$q->where('name', 'like', '%3+%');
		})->get() as $game) {
			$this->lj = $this->lj.$game->name."<br>";
		};
		echo $av->renderAll($this->lj);
	}

}