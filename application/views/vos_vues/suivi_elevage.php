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

    <link href="<?php echo base_url(); ?>/public/css/style.css" rel="stylesheet">

    <style>
        body {
            background: whitesmoke;
            margin: 0;
            padding: 0;
            color: grey;
        }

     

        h4 {
            margin-top: 20px;
            margin-bottom: 20px;
            
        }

       

        .mybtn1 {
            border: none;
            border-radius: 10px;
            background-image: url(<?php echo base_url(); ?>/public/img/pig2.jfif);
            background-color: rgba(0; 0; 0; 0.5);
            background-position: center;
            background-size: cover;
            color: #fff;
            height: 300px;
            width: 300px;
            padding: 10px;
            margin-top: 20px;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .mybtn1:hover , .mybtnIMP:hover {
            color: #87C165;
        }
        

        .mybtnIMP {
            border: none;
            border-radius: 50px;
            background-image: url(<?php echo base_url(); ?>/public/img/pig3.jfif);
            background-position: center;
            background-size: cover;
            color: #fff;
            width: 300px;
            height: 300px;
            padding: 10px;
            margin-top: 20px;
            font-size: 30px;
            margin-bottom: 10px;
        }

      

        .zone_text {
            color: ;
            width: 700px;
            height: 400px;
            text-align: center;
            background-color: white;
            border: 1px solid;
            border-radius: 6px;
        }

        .container1 {
            padding: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .container2 {
            padding: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;

        }

        #title {
            font-size: 1.7em;
            font-weight: 700 !important;
            color: #818181;
        }
    </style>

</head>

<body>

   





    <div id="main">
        <div class="container-fluid">
            <h4 id="title" class="text-center">Suivi de votre elevage</h4><br>



            <div class="container-fluid">
                <h5 class="text-center">Choisir votre option :</h5>
                <div class="container2">

                    <div>
                        <?php
                   // echo validation_errors();
                    
                    // form_open('controller/function)
                   // echo form_open('test/affiche_GraphiqueBilan');
                   // ?><form action="http://localhost/codeigniter/index.php/test/affiche_GraphiqueBilan.html" method="POST">
                            <button type="submit" class=" btn btn-block mybtn1 btn-success">Consulter vos bilans de tests</button>
                        </form>
                    </div>
                    <div>
                        <form action="http://localhost/codeigniter/index.php/test/affiche_HistoriqueTest.html" method="POST">
                            <button type="submit" class=" btn btn-block mybtnIMP btn-success">Consulter votre historique de test</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>

