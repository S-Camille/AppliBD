<?php

namespace gamepedia\gp\models;

class Rating_Board extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'rating_board';
	protected $primaryKey = 'id';
	public $timestamps = 'false';

	public function ratingb() {
		return $this->hasMany('gamepedia\gp\models\Game_Rating', 'id');
	}
	
}