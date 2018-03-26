<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\AffRatingJeuxMarioView;
use gamepedia\gp\models\Game;

class AffRatingJeuxMarioController {

	private $g;
	private $n = '%Mario%';


	public function __construct() {
		$this->g = Game::where('name', 'like', $this->n)->get();
	}

	public function listerRatingJeuxMario() {
		$av = new AffRatingJeuxMarioView();
		echo $av->renderAll($this->g);
	}

}