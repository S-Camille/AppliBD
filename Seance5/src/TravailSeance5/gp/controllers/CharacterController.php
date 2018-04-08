<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Character;
use gamepedia\gp\models\Game;
use gamepedia\gp\models\Game2Character;

class CharacterController {

	public function accesChar($id) {
		$g = Game::select('*')->where('id', '=', $id)->first();
		$c = Game2Character::select('*')->where('game_id', '=', $g->id)->get();
		foreach ($c as $cc) {
			$ch = Character::select('id', 'name')->where('id', '=', $cc->character_id)->first();
			$result[] = [
				'character' => $ch,
				'links' => [
					'self' => [
						'href' => "/api/characters/".$ch->id
					]
				]
		];
		}
		header("Content-Type: application/json");
		echo htmlspecialchars(json_encode(['characters' => $result]));
	}

}