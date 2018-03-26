<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class AffPersoJeu12342View {

	public function rendern($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderd($deck) {
		$html = "<label>".$deck."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des personnages du jeu 12342");
		$html = '';
		foreach ($donnees as $jeu) {
			$html = $html.$this->rendern($jeu->name).'  '.$this->renderd($jeu->deck);
		}
		$j =<<<END
		<table>
			<tr>
				<th>Liste des personnages du jeu 12342</th>
			</tr>
			<tr>
				<td>$html</td>
			</tr>
		</table>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$j."<br>".$acf;
	}

}