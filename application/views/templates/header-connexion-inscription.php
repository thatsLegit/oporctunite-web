<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Oporctunité</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- bootswatch theme -->
	<link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css"/>
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Font Awesome CSS
     <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
     Google Fonts 
	 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900&display=swap" rel="stylesheet"> -->

	 <style>
		body{
			margin: 0;
			padding: 0;
			background-image: url("<?php echo base_url(); ?>assets/img/pig.png");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			font-family: "Montserrat", Arial, Helvetica, sans-serif;
		}
	</style>

</head>

<body>

	<div class="container rounded text-white">

	<!-- Flash messages -->
    <?php if($this->session->flashdata('elevage_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('elevage_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('veterinaire_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('veterinaire_created').'</p>'; ?>
      <?php endif; ?>

	  <?php if($this->session->flashdata('user_loggedOut')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedOut').'</p>'; ?>
      <?php endif; ?>

