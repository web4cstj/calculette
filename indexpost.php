<?php
$operateurs = [
	"addition" => "+", 
	"soustraction" => "-",
	"multiplication" => "&times;",
	"division" => "&div;",
];

// On récupère les 3 données attendues en vérifiant leur présence
// La valeur par défaut des nombres est 0 et la valeur par défaut de l'opération est "addition"
// Vérification
if (isset($_POST['op'])) {
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$op = $_POST['op'];
} else {
	$n1 = 0;
	$n2 = 0;
	$op = "addition";
}

// On calcule le résultat en fonction de l'opération demandée
switch($op) {
	case "addition":
		$resultat = $n1 + $n2;
	break;
	case "soustraction":
		$resultat = $n1 - $n2;
	break;
	case "multiplication":
		$resultat = $n1 * $n2;
	break;
	case "division":
		if ($n2 == 0) {
			$resultat = "Division par zéro";
		}else{
			$resultat = $n1 / $n2;
		}
	break;
}

// On génère l'affichage
// Résultat attendu : "2 + 2 = 4"
$affichage = $n1." ".$operateurs[$op]." ".$n2." = ".$resultat;

$form = '';
$form .= '<form action="" method="post">';
$form .= '<input type="number" name="n1" id="n1" value="'.$n1.'" />';
$form .= '<select name="op" id="op">';
foreach ($operateurs as $nom=>$signe) {
	if ($op === $nom) {
		$form .= '<option value="'.$nom.'" selected="selected">'.$signe.'</option>';	
	} else {
		$form .= '<option value="'.$nom.'">'.$signe.'</option>';	
	}
}
$form .= '</select>';
$form .= '<input type="number" name="n2" id="n2" value="'.$n2.'" />';
$form .= '<input type="submit"/>';
$form .= '</form>';

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
	<p>Entrez des données dans le formulaire pour effectuer un calcul.</p>
	<?php echo $form; ?>
</body>

</html>
