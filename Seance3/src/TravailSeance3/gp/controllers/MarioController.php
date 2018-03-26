<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Game;
use gamepedia\gp\views\MarioView;

class MarioController {

	private $game;
	private $m = '%Mario%';

	public function __construct() {
		$this->game = Game::where('name', 'like', $this->m)->get();
	}

	public function listerJeuMario() {
		$mv = new MarioView();
		echo $mv->renderAll($this->game);
	}

}