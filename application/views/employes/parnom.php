<?php
echo $titre;
foreach ($employes as $e) {
	echo $e['matricule'].''.$e['nom'].''.$e['prenom'].'</br>';
}
?>