<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Genre;
use gamepedia\gp\models\Game2Genre;

class NouvGenreController {

	public function ajoutGenre() {
		$g = new Genre();
		$g->name = 'NouvCaca';
		$g->deck = 'Deck de caca';
		$g->description = '';
		$g->save();
		$ig = Genre::select('id')->where('name', '=', $g->name)->get();
		$i = json_decode($ig);
		$a12 = new Game2Genre();
		$a12->game_id = 12;
		$a12->genre_id = $i[0]->id;
		$a12->save();
		$a56 = new Game2Genre();
		$a56->game_id = 56;
		$a56->genre_id = $i[0]->id;
		$a56->save();
		$a345 = new Game2Genre();
		$a345->game_id = 345;
		$a345->genre_id = $i[0]->id;
		$a345->save();
	}

}