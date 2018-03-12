<?php

namespace gamepedia\gp\models;

class Character extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'character';
	protected $primaryKey = 'id';
	public $timestamps = 'true';

	public function ennemi1() {
		return $this->belongsToMany('gamepedia\gp\models\Character', 'enemies', 'char1_id', 'char2_id');
	}

	public function ennemi2() {
		return $this->belongsToMany('gamepedia\gp\models\Character', 'enemies', 'char2_id', 'char1_id');
	}

	public function ami1() {
		return $this->belongsToMany('gamepedia\gp\models\Character', 'friends', 'char1_id', 'char2_id');
	}

	public function ami2() {
		return $this->belongsToMany('gamepedia\gp\models\Character', 'friends', 'char2_id', 'char1_id');
	}

	public function gamec() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'game2character', 'character_id', 'game_id');
	}

}