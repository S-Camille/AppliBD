<?php

namespace gamepedia\gp\models;

class Game extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'game';
	protected $primaryKey = 'id';
	public $timestamps = 'true';

	public function character() {
		return $this->belongsToMany('gamepedia\gp\models\Character', 'game2character', 'game_id', 'character_id');
	}

	public function users() {
		return $this->belongsToMany('gamepedia\gp\models\Utilisateur', 'game2user', 'game_id', 'uti_email');
	}
	
	public function genre() {
		return $this->belongsToMany('gamepedia\gp\models\Genre', 'game2genre', 'game_id', 'genre_id');
	}

	public function platform() {
		return $this->belongsToMany('gamepedia\gp\models\Platform', 'game2platform', 'game_id', 'platform_id');
	}

	public function rating() {
		return $this->belongsToMany('gamepedia\gp\models\Game_Rating', 'game2rating', 'game_id', 'rating_id');
	}

	public function theme() {
		return $this->belongsToMany('gamepedia\gp\models\Theme', 'game2theme', 'game_id', 'theme_id');
	}

	public function developer() {
		return $this->belongsToMany('gamepedia\gp\models\Company', 'game_developers', 'game_id', 'comp_id');
	}

	public function publisher() {
		return $this->belongsToMany('gamepedia\gp\models\Company', 'game_publishers', 'game_id', 'comp_id');
	}

	public function game1() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'enemies', 'game1_id', 'game2_id');
	}

	public function game2() {
		return $this->belongsToMany('gamepedia\gp\models\Game', 'enemies', 'game2_id', 'game1_id');
	}

	public function premiereApparitionChar() {
		return $this->belongsTo('gamepedia\gp\models\Character', 'id' );
	}

	public function commentaires() {
		return $this->belongsTo('gamepedia\gp\models\Commentaire', 'id');
	}

}