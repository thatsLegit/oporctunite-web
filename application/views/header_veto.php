<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>O'porctunité Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
     <link href="<?php echo base_url(); ?>/public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/css/style.css" rel="stylesheet">


    <style>
        body {
            background: white;
            color: gray;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #87C165;
            width: auto;
            height: auto;
        }

        #logo {
            font-family: Apple Chancery, cursive;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 10px;

        }

        li {
            font-family: cursive;
            background-color: white;
            margin: 5px;
            width: 200px;
            padding: 5px;
            text-align: center;
            border-radius: 5px;
        }

        #main {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-content: center;
           
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
        }
    </style>

</head>

<body>

     <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-lightgreen">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="logo">
                <h3>O'porctunité</h3>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Consulter élevages<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contacts <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="#"></a>
        </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>