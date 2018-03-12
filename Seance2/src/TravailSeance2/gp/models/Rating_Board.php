<?php

namespace gamepedia\gp\models;

class Rating_Board extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'rating_board';
	protected $primaryKey = 'id';
	public $timestamps = 'false';

	public function rating() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'game2rating', 'rating_id', 'game_id');
	}
	
}