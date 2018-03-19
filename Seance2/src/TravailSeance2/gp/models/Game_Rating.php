<?php

namespace gamepedia\gp\models;

class Game_Rating extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'game_rating';
	protected $primaryKey = 'id';
	public $timestamps = 'false';

	public function ratingr() {
		return $this->belongsTo('gamepedia\gp\models\Rating_Board', 'id');
	}

	public function ratingg() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'game2rating', 'grating_id', 'game_id');
	}

}