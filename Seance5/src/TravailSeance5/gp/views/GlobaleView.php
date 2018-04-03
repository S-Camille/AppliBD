<?php

namespace gamepedia\gp\views;

class GlobaleView {

	public static function header($titre) {
		$app = \Slim\Slim::getInstance();
		$ac = $app->urlFor('Accueil');
		$rootUI = $app->request->getRootUri();
		$rootUI = str_replace('index.php','',$rootUI);
		$html = <<<END
<!DOCTYPE html>
<html>
<head>
		<title>Bases de données & Applications sur la base de données GamePedia</title>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="$rootUI/src/TravailSeance5/web/css/css.css" />
END;
		$html = $html.<<<END
</head>
<body>
<div>
	<header>
		<h1><a href="$ac">Bases de données & Applications sur la base de données GamePedia</a></h1>
		<h2>$titre</h2>
	</header>
</div>
	<div id="content">
END;
		return $html;
	}
	
	public static function footer() {
		$html=<<<END
		</div>
<footer>
 	<ul id="auteur">
				<li>Maeva BUTAYE</li><!--
				--><li>Camille SCHWARZ</li><!--
				--><li>Gwendolyn VOMSCHEID</li><!--
				--><li>Loïc OBERLÉ</li><!--
				--><li>Maxime SALOU</li>
	</ul>
</footer>
</body>
</html>
END;
		return $html;
	}
	
}