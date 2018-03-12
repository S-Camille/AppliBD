<?php

namespace gamepedia\gp\models;

class Game_Rating extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'game_rating';
	protected $primaryKey = 'id';
	public $timestamps = 'false';
	
}