<!DOCTYPE html>
<html lang="fr"  dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Demo CI</title>
</head>
<body>
<?php

$base='http://localhost/codeigniter/';
echo'<div>';

	echo'<a href="'.$base.'index.php">Home</a>';
	echo'<a href="'.$base.'index.php/pages/about">About</a>';
	echo'<a href="'.$base.'index.php/employes">Employes</a>';
	echo'<a href="'.$base.'index.php/employes/recherche">Recherche</a>';
echo'<a href="'.$base.'index.php/employes/creer">Creer</a>';
echo'</div>';
