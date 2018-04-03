<?php

namespace gamepedia\gp\models;

class Commentaire extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'commentaire';
	protected $primaryKey = 'id';
	public $timestamps = 'true';

	public function user() {
		return $this->belongsTo('gamepedia\gp\models\Utilisateur', 'email');
	}

	public function jeu() {
		return $this->belongsTo('gamepedia\gp\models\Game', 'id');
	}

}