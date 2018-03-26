<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Game;
use gamepedia\gp\views\ListeJeuxView;

class ListeJeuxController {

	private $game;

	public function __construct() {
		$timeA = microtime(true);
		$this->game = Game::select('id', 'name', 'deck')->get();
		$timeB = microtime(true);
		echo $timeB-$timeA;	
	}

	public function listerJeux() {
		/*$ljv = new ListeJeuxView();
		echo $ljv->renderAll($this->game);*/
	}

}