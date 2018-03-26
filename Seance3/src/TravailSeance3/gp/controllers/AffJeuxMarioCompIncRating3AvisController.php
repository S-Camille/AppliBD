<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\AffJeuxMarioCompIncRating3AvisView;
use gamepedia\gp\models\Game;

class AffJeuxMarioCompIncRating3AvisController {

	private $j = '';

	public function __construct() {
		$this->j = '';
	}

	public function listerJeuxMarioCompIncRating3Avis() {
		$av = new AffJeuxMarioCompIncRating3AvisView();
		foreach (Game::where('name', 'like', 'Mario%')->whereHas('rating', function($q){
			$q->where('name', 'like', '%3+%');
		})->whereHas('publisher', function($q) {
			$q->where('name', 'like', '%Inc.%');
		})->whereHas('rating', function($q){
			$q->where('rating_board_id', '=', 3);
		})->get() as $game) {
			$this->j = $this->j.$game->name."<br>";
		}
		echo $av->renderAll($this->j);
	}

}