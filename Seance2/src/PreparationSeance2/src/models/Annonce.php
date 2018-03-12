<?php

namespace gamepedia\gp\models;

class Annonce extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'annonce';
	protected $primaryKey = 'id';
	public $timestamps = 'false';

	public function photos() {
			return $this->hasMany('gamepedia\gp\models\Photo', 'annonce_id');
		}
	public function categ() {
		return $this->belongsToMany('\gamepedia\gp\models\Categorie', 'categ_annonce', 'annonce_id', 'categ_id'); 
	}

}