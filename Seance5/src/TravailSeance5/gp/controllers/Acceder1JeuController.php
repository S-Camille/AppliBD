<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Game;

class Acceder1JeuController {

	public function acces($id) {
		$g = Game::where('id', '=', $id)->first();
		header('Content-Type: application/json');
		echo htmlspecialchars(json_encode($g));
	}

}