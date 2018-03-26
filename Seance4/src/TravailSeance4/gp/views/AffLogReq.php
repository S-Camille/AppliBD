<?php
namespace gamepedia\gp\views;

use \Illuminate\Database\Capsule\Manager as DB;

class AffLogReq {
	public static function afficher(){
		$requetes = DB::getQueryLog();
		$i = 1;
		foreach($requetes as $requete){
			echo $i." : ".$requete['query'].'<br />';
			$i++;
		}
	}
}