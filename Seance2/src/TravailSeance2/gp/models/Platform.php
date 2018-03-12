<?php

namespace gamepedia\gp\models;

class Platform extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'platform';
	protected $primaryKey = 'id';
	public $timestamps = 'true';

	public function gamep() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'game2platform', 'platform_id', 'game_id');
	}
	
}