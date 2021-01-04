<?php
$operateurs = [
	"addition" => "+", 
	"soustraction" => "-",
	"multiplication" => "&times;",
	"division" => "&div;",
];

// On récupère les 3 données attendues en vérifiant leur présence
// La valeur par défaut des nombres est 0 et la valeur par défaut de l'opération est "addition"
// Vérification de n1

// Vérification de n2

// Vérification de op

// On calcule le résultat en fonction de l'opération demandée

// On génère l'affichage
// Résultat attendu : "2 + 2 = 4"

?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/calculette.css"/>
	<title>La calculette</title>
</head>

<body>
	<?php include "headernav.inc.php" ?>
	<div class="affichage">
		<?php echo $affichage; ?>
	</div>
	<p>Cliquez sur un des liens ci-dessous ou modifiez l'adresse pour effectuer un calcul.</p>
	<div class="lien"><a href="?n1=2&n2=2&op=addition">2 plus 2</a></div>
	<div class="lien"><a href="?n1=8&n2=12&op=multiplication">8 fois 12</a></div>
	<div class="lien"><a href="?n1=100&n2=3&op=division">100 divisé par 3</a></div>
	<div class="lien"><a href="?n1=40&n2=4&op=soustraction">40 moins 4</a></div>
</body>

</html>
