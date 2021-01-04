<?php
$liens = [
	'index.php'=>'Avec des liens',
	'indexget.php'=>'Avec un formulaire GET',
	'indexpost.php'=>'Avec un formulaire POST',
];
$nav = '';
foreach($liens as $fic=>$lien) {
	if (basename($_SERVER['PHP_SELF'])===$fic) {
		$nav .= '<li class="courant">';
	} else {
		$nav .= '<li>';
	}
	$nav .= '<a href="'.$fic.'">'.$lien.'</a>';
	$nav .= '</li>';
}
?><header><h1>La calculette</h1></header>
<nav>
	<ul>
		<?php echo $nav; ?>
	</ul>
</nav>
