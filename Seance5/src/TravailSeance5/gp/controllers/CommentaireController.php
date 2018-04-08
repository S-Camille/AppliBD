<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Commentaire;

class CommentaireController {

	public function accesCom($id) {
		$c = Commentaire::where('id_game', '=', $id)->get();
		$result = [
				'commentaires' => $c
		];
		header("Content-Type: application/json");
		echo htmlspecialchars(json_encode($result));
	}

}