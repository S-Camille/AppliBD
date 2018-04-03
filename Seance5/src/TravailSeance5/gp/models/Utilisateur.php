<?php

namespace gamepedia\gp\models;

class Utilisateur extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'utilisateur';
	protected $primaryKey = 'email';
	public $timestamps = false;

	public function comm() {
		return $this->hasMany('gamepedia\gp\models\Commentaire', 'id');
	}

	public function jeux() {
		return $this->belongsToMany('gamepedia\gp\models\Game2User', 'game2user', 'uti_id', 'game_id');
	}
	
}