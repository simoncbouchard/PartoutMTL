<?php
	/// *** SECURITE DE LA PAGE *** ///////////////////////////
	if(!isset($_SESSION['authentifie']))
	{
		header('Location: ../index.php');
	}
	///////////////////////////////////////////////////////////
?>


<div>
	Les données ont eté importées correctement<br>
	<a href="index.php?requete=importation">Retour vers l'importation de données</a>
</div>
