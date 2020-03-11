<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>O'porctunité Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>
<style>
    .form-group{
        height: 55px;
    }
    </style>
<body>

    <div id="titre">
        <h3 class="text-center mt-5">O'porctunité</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="form mt-5">
                    <form action="conditions.html" method="post" name="login">
                        <div class="form-group">
                            <select class="custom-select mb-3">
                                <option value="" hidden class="statut">Statut</option>
                                <option value="1">Elevage</option>
                                <option value="2">Veterinaire</option>
                            </select>
                            <div class="form-group">

                                <input type="text" name="login" class="form-control" id="login" aria-describedby="emailHelp" placeholder="login">
                            </div>
                            <div class="form-group">

                                <input type="text" name="numVeterinaire" class="form-control" id="numVeto" aria-describedby="emailHelp" placeholder="Num Veterinaire">
                            </div>
                                  <div class="form-group">

                                <input type="text" name="numCabinet" class="form-control" id="numCabinet" aria-describedby="emailHelp" placeholder="numCabinet">
                                
                            </div>

                            
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">

                                <input type="email" name="" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
                            </div>
                            <div class="form-group">

                                <input type="text" name="" class="form-control" id="telephone" aria-describedby="emailHelp" placeholder="Telephone">
                            </div>
                            <div class="form-group">

                                <input type="text" name="" class="form-control" id="nomElevage" aria-describedby="emailHelp" placeholder="Adresse">
                            </div>
                            <div class="form-group">

                                <input type="text" name="Code postal" class="form-control" id="codepostal" aria-describedby="emailHelp" placeholder="Code Postal">
                                
                            </div>
                         

                            <div class="col-md-12 text-center ">
                                <button href="login.html" type="submit" class=" btn btn-block mybtn btn-success">S'inscrire</button>
                            </div>

                            

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>