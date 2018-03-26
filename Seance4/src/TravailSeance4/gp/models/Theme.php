<?php

namespace gamepedia\gp\models;

class Theme extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'theme';
	protected $primaryKey = 'id';
	public $timestamps = 'false';

	public function theme() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'game2theme', 'theme_id', 'game_id');
	}
	
}