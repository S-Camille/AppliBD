<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class PlatformSupView {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des plateformes dont la base installée est >= 10 000 000");
		$html = '';
		foreach ($donnees as $jeu) {
			$html = $html.$this->render($jeu->name);
		}
		$p =<<<END
		<table>
			<tr>
				<th>Liste des plateformes dont la base installée est >= 10 000 000</th>
			</tr>
			<tr>
				<td>$html</td>
			</tr>
		</table>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$p."<br>".$acf;
	}

}