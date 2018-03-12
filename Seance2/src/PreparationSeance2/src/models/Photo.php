<?php

namespace gamepedia\gp\models;

class Photo extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'photo';
	protected $primaryKey = 'id';
	public $timestamps = 'false';

	public function annonce() {
		return $this->belongsTo('gamepedia\gp\models\Annonce', 'annonce_id');
	}

}