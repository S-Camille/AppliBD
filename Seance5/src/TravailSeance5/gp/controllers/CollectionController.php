<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Game;

class CollectionController {

	public function accesColl() {
		$g = Game::take(200)->get();
		$result = [];
		foreach ($g as $jeu) {
			$result[] = [
				'game' => $jeu,
				'links' => [
					'self' => [
						'href' => "/api/games/".$jeu->id
					]
				]
			];
		}
		header("Content-Type: application/json");
		echo htmlspecialchars(json_encode($result));
	}

}