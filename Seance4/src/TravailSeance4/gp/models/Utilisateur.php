<?php

namespace gamepedia\gp\models;

class Utilisateur extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'utilisateur';
	protected $primaryKey = 'email';
	public $timestamps = false;
	public $incrementing = false;

	public function comm() {
		return $this->hasMany('gamepedia\gp\models\Commentaire', 'email_uti');
	}

	public function jeux() {
		return $this->belongsToMany('gamepedia\gp\models\Game2User', 'game2user', 'uti_email', 'game_id');
	}
	
}