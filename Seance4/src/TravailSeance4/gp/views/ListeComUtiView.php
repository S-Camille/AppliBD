<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class ListeComUtiView {

	public function rendern($name, $date) {
		$html = "<label>".$name." ".$date;
		$html .= substr($html,0,strlen($html)-2)."</label><br>";
		return $html;
	}

	public function renderAll($e, $donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des commentaires de la personne ayant pour mail : ".$e);
		$html = '';
		foreach ($donnees as $com) {
			$html = $html.$this->rendern($com->titre, $com->datecrea);
		}
		$j =<<<END
		<table>
			<tr>
				<th>Liste des commentaires de la personne ayant pour mail : $e</th>
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