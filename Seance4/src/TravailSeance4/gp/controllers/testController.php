<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Genre;

class testController {

	$g = new Genre();
	$g->name = 'NouvCaca';
	$g->deck = 'Deck de caca';
	$g->description = '';
	$g->save();


}