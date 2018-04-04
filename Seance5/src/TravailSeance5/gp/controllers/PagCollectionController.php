<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Game;

class PagCollectionController {

	public function accesCollPag($page) {
		$g = Game::skip(($page-1)*200)->take(200)->get();
		$result = [
			'games' => $g, 
			'links' => [
				'prev' => [
					'href' => "/api/games?page=".($page-1)
				],
				'next' => [
					'href' => "/api/games?page=".($page+1)
				]
			]
		];
		header("Content-Type: application/json");
		echo htmlspecialchars(json_encode($result));
	}

}