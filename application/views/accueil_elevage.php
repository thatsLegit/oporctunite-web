<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <style>
        body {
            background: whitesmoke;
            color: gray;
            margin: 0;
            padding: 0;
            font-family: "Montserrat",Arial, Helvetica, sans-serif;
        }

        .header {
            background-color: #87C165;
            width: auto;
            height: auto;
        }

        #logo {
            font-family: "Montserrat", Arial, Helvetica, sans-serif;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 10px;

        }

        li {
            font-weight: 300;
            background-color: white;
            margin: 5px;
            width: 200px;
            padding: 5px;
            text-align: center;
            border-radius: 5px;
            opacity: 0.47;
        }

        li:hover{
            opacity: 1;
        }

        #main {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-content: center;
           
        }
        
          .title{
            font-size: 1.7em;
            font-weight: 700 !important;
            color: #818181;
        }

        h2{
            padding: 25px;
            margin-top: 20px;
            margin-bottom: 50px;
        }
        
        .zone_text{
            color: #87C165;
            padding: 13px;
            width: 200px;
            background-color: white;
            border-radius: 5px;
             font-size: 1em;
            font-weight: 700 !important;
        }
    </style>

</head>

<body>
    <div id="main" class="text-center">
        <div class="menu">
            <p>Connecté</p>
            <h2 class="title">Bienvenue !</h2>
            <div>
           <label class="">Nom d'élevage :</label><br>
           <label class="zone_text">$var_elevage</label>
            </div>
            <div>
           <label class="">Lieu d'elevage :</label><br>
            <label class="zone_text">$var_lieuElevage</label>
            </div>
             <div>
           <label class="">Nouveautés :</label><br>
            <label class="zone_text">$notifs</label>
            </div>
        </div>

    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>
