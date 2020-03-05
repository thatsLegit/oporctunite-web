<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>O'porctunité Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            background: white;
            margin: 0;
            padding: 0;
            color: grey;
        }

       

        #logo {
            font-family: Apple Chancery, cursive;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 10px;

        }


        #main {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-content: center;

        }

        h2 {
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        h5{
            margin-top: 10px;
        }

        .zone_text {
            color: #87C165;
            padding: 13px;
            width: 200px;
            background-color: white;
            border-radius: 5px;
        }

        .mybtn {
            border: none;
            background-color: #87BF65;
            width: 250px;
            padding: 10px !important;
        }

        .infosVeto {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .container {
            border: 1px solid;
            height: 150px;
            width: 150px;
        }
          .title{
            font-size: 1.7em;
            font-weight: 700 !important;
            opacity: 0.7;
        }

        .menu {
            margin-right: 50px;
            margin-left: 50px;
            margin-bottom: 50px;
        }
    </style>

</head>

<body>


    <div class="contact">
        <h5 class="text-center">Contacts</h5>
        <div id="main">
            <div class="menu">
                <h2 class="title">Administrateur</h2>
                <div class="infosVeto">
                    <div>
                        <label class="">$nom(laura jegou)</label><br>
                    </div>
                    <div>
                        <label class="">$adresse(l.jegou_16@envt.fr)</label><br>
                    </div>
                </div>
            </div>
            <div class="menu">
                <h2 class="title">Veterinaires</h2>
                <div class="infosVeto">
                    <div>
                        <label class="">Dr $nom :</label><br>
                    </div>
                    <div>
                        <label class="">$lieu</label><br>
                    </div>
                     <div>
                        <label class="">$adresse</label><br>
                    </div>
                    <div>
                        <label class="">$mail</label><br>
                    </div>
                    <div>
                        <label class="">$numtel</label><br>
                    </div>
                </div>


            </div>

        </div>
        <form action="" method="POST">
            <div class="col-md-12 text-center ">
                <button type="submit" class=" btn btn-block mybtn btn-success">Accueil</button>
            </div>
        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>