<?php

namespace gamepedia\gp\models;

class Company extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'company';
	protected $primaryKey = 'id';
	public $timestamps = 'true';

	public function gamecod() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'game_developers', 'comp_id', 'game_id');
	}
	
	public function gamecop() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'game_publishers', 'comp_id', 'game_id');
	}

	public function prod(){
		return $this->hasMany('gamepedia\gp\models\Platform', 'id');
	}

}