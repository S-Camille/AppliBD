<?php

namespace gamepedia\gp\models;

class Genre extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'genre';
	protected $primaryKey = 'id';
	public $timestamps = 'true';
	
}