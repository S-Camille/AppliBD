<?php

namespace gamepedia\gp\models;

class Genre extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'genre';
	protected $primaryKey = 'id';
	public $timestamps = false;
	
	public function gameg() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'game2genre', 'genre_id', 'game_id');
	}

}