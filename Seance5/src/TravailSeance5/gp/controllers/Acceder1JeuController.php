<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Game;
use gamepedia\gp\models\Game2Platform;
use gamepedia\gp\models\Platform;

class Acceder1JeuController {

	public function acces($id) {
		$g = Game::select('*')->where('id', '=', $id)->first();
		$p = Game2Platform::select('*')->where('game_id', '=', $g->id)->get();
		foreach ($p as $pp) {
			$ps = Platform::select('*')->where('id', '=', $pp->platform_id)->first();
			$res[] = [
				'platform' => $ps,
				'links' => [
					'self' => [
						'href' => "/api/games/".$id."/platforms"
					]
				]
			];
		}
		$result[] = [
			'game' => [
				'game' => $g,
				'platforms' => $res
			],
			'links' => [
				'comments' => [
					'href' => "/api/games/".$id."/comments",
				],
				'characters' => [
					'href' => "/api/games/".$id."/characters"
				]
			]
		];
		header('Content-Type: application/json');
		echo htmlspecialchars(json_encode($result));
	}

}