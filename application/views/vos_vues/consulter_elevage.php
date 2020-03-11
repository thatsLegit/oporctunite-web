<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>O'porctunité Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            background: whitesmoke;
            margin: 0;
            padding: 0;
            color: grey;
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

        h4 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        label {
            margin: 40px;
        }

        .mybtn {
            border: none;
            border-radius: 50px;
            background-color: #87C165;
            width: 300px;
            padding: 10px;
            margin-top: 20px;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .btnsearch {
            margin: 0;
            width: 50px;
            height: 70px;
            text-align: center;
            background-color: white;
            border: none;
            border-radius: 6px;
        }


        .zone_text {
            color: #87C165;
            width: 300px;
            height: 70px;
            text-align: center;
            background-color: white;
            border: none;
            border-radius: 6px;
            margin-top: 30px;

        }

        .container1 {
            padding: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        
        select{
            width: 300px;
            border-radius: 5px;
            height: 50px;
            margin-bottom: 50px;
        }
          #title{
            font-size: 1.7em;
            font-weight: 700 !important;
            color: #818181;
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
                        <a class="nav-link" href="accueil_elevage.html">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="evaluation.html">Bien etre evaluation<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="fiches_conseil_search.html">Fiches conseils <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Fiches favoris <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Suivi de mon elevage<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contacts.html">Contacts<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="#"></a>
        </nav>
    </div>



    <div id="main">
        <div class="container-fluid">
            <h4 id="title" class="text-center">Consulter elevages</h4>
            <form>
                <div class="col-md-12 text-center ">

                     <form class="form-inline">
          <input class="zone_text" type="search" placeholder="Rechercher elevages" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fas fa-adjust"></i></button>
        </form>
                </div>
            </form><br><br>


           
              <div class="text-center">
                <select class="select">
                    <option hidden class="statut">Selectionner nom elevages</option>
                    <option value="1"></option>
                    <option value="2"></option>
                     <option value="3"></option>
                    <option value="4"></option>
                     <option value="5"></option>
                    
                </select>
            </div>

            <div class="text-center">
                <select class="select">
                    <option value="" hidden class="statut">Region</option>
                    <option value="1">Toulouse</option>
                    <option value="2">Paris</option>
                </select>
            </div>

            <form action="profils_elevage.html" method="POST">
                <div class="col-md-12 text-center ">
                    <button type="submit" class=" btn btn-block mybtn btn-success">Continuer</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>