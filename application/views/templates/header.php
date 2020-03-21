<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Oporctunité</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
	<!-- bootswatch theme -->
	<link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css"/>
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Font Awesome CSS
     <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
     Google Fonts 
	 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900&display=swap" rel="stylesheet"> -->
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?php echo base_url(); ?>">O'porctunite</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
				<li><a class="nav-link" href="<?php echo base_url(); ?>fiches">Rechercher une fiche</a></li>
				<li><a class="nav-link" href="<?php echo base_url(); ?>favoris">Mes favoris</a></li>
				<li><a  class="nav-link" href="<?php echo base_url(); ?>follow">Suivre</a></li>
				<!-- Laisser les deux suivre, l'un est pour les vétos, l'autre pr les eleveurs,
				faudra voir l'affichage dans la vue avec les sessions -->
				<li><a  class="nav-link" href="<?php echo base_url(); ?>follower">Suivre</a></li>
				<li><a  class="nav-link" href="<?php echo base_url(); ?>Bilans">Mon bilan</a></li>
				<li><a class="nav-link" href="<?php echo base_url(); ?>contact">Contacts</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">	
				<li>
					<a href="<?php echo base_url(); ?>inscription">
						<button type="button" class="btn btn-default btn-custom">
							<span class="btntext glyphicon-class">S'inscrire</span>
						</button>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>login">
						<button type="button" class="btn btn-default btn-custom">
							<span class="btntext glyphicon-class">Se connecter</span>
						</button>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>utilisateurs/logout">
						<button type="button" class="btn btn-default btn-custom">
							<span class="btntext glyphicon-class">Se deconnecter</span>
						</button>
					</a>
				</li>				
			</ul>
		</div>
	</nav>

	<div class="container rounded text-white">

	<!-- Flash messages -->
    <?php if($this->session->flashdata('elevage_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('elevage_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('veterinaire_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('veterinaire_created').'</p>'; ?>
      <?php endif; ?>


