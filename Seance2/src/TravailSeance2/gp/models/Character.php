<?php

namespace gamepedia\gp\models;

class Character extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'character';
	protected $primaryKey = 'id';
	public $timestamps = 'true';

}