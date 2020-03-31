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

</head>

<style>

        body {
            background: whitesmoke;
            color: #818181;
            margin: 0;
            padding: 0;
            font-family: "Montserrat",Arial, Helvetica, sans-serif;
        }

        .header {
            background-color: #87C165;
            width: auto;
            height: auto;
        }

        h2, h5, p{
            color: #818181;
        }

        #menu-accueil{
            background-color: whitesmoke;
            margin: auto;
            display: block;
            margin-top: 10vh;
            margin-bottom: 10vh;
        }

        #button{
            width: 7vw;
        }

        .container{
            margin-bottom: 10vh;
        }

</style>

<body>
    <div id="main" class="text-center">
        <div id="menu-accueil">
            <h2 class="title">Bienvenue 
            <br>
            <br>
                <?php
                    echo "<h5>".$this->session->userdata('nom')."</h5>";
                ?>
            </h2>
        </div>

        <?php
            $enCours = 0;

            foreach($elevage_suivi as $e){
                if($e['etat']=="En Cours"){
                    $enCours++;
                }
            }
        ?>

        <div class="container">
            <p>Elevage vous demandant un suivi :</p>
            <br> 

            <?php
                if($enCours == 0){
                    echo'<p> Aucune nouvelle demande de suivi </p>';
                }
                else{

            ?> 

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Elevage</th>
                        <th>Taille</th>
                        <th>Adresse</th>
                        <th>Code Postal</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Etat de la demande</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($elevage_suivi as $e){

                            if($e['etat']=="En Cours"){

                               

                                    echo '<tr>
                                            <td>'.$e['nomElevage'].'</td>
                                            <td>'.$e['tailleElevage'].'</td>
                                            <td>'.$e['adresse'].'</td>
                                            <td>'.$e['codePostal'].'</td>
                                            <td>'.$e['email'].'</td>
                                            <td>'.$e['telephone'].'</td>
                                            <td>'.$e['etat'].'</td>';

                                            echo validation_errors();
            
                                            echo form_open('Utilisateurs/accepter_suivi');

                                                echo '<input name="numEleveur" id="numEleveur" type="text" value="'.$e['numEleveur'].'" hidden>
                                                <td><button id="button" type="submit" class="btn btn-success">Accepter</button></td>
                                            </form>';

                                            echo validation_errors();
            
                                            echo form_open('Utilisateurs/supprimer_suivi');

                                            echo '<input name="numEleveur" id="numEleveur" type="text" value="'.$e['numEleveur'].'" hidden>
                                            <td><button id="button" type="submit" class="btn btn-danger">Refuser</button></td>
                                            </form>
                                        </tr>';
                            }

                                
                        }
                    ?>
                </tbody>
            </table>

            <?php
                }
            ?>

        </div>

        <?php
            $accepter = 0;

            foreach($elevage_suivi as $e){
                if($e['etat']=="Accepter"){
                    $accepter++;
                }
            }
        ?>

        <div class="container">
            <p>Elevage que vous suivez :</p>
            <br> 

            <?php
                if($accepter == 0){
                    echo'<p> Aucun suivi d\'élevage a été accepté </p>';
                }
                else{

            ?> 

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Elevage</th>
                        <th>Taille</th>
                        <th>Adresse</th>
                        <th>Code Postal</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Etat de la demande</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($elevage_suivi as $e){

                            if($e['etat']=="Accepter"){

                               

                                    echo '<tr>
                                            <td>'.$e['nomElevage'].'</td>
                                            <td>'.$e['tailleElevage'].'</td>
                                            <td>'.$e['adresse'].'</td>
                                            <td>'.$e['codePostal'].'</td>
                                            <td>'.$e['email'].'</td>
                                            <td>'.$e['telephone'].'</td>
                                            <td>'.$e['etat'].'</td>';

                                            echo validation_errors();
            
                                            echo form_open('Utilisateurs/supprimer_suivi');

                                            echo '<input name="numEleveur" id="numEleveur" type="text" value="'.$e['numEleveur'].'" hidden>
                                            <td><button id="button" type="submit" class="btn btn-warning">Annuler</button></td>
                                            </form>
                                        </tr>';
                            }

                                
                        }
                    ?>
                </tbody>
            </table>

            <?php
                }
            ?>

        </div>

        <?php
            $refus = 0;

            foreach($elevage_suivi as $e){
                if($e['etat']=="Refuser"){
                    $refus++;
                }
            }
        ?>

        <div class="container">
            <p>Elevage que vous avez refuser de suivre :</p>
            <br> 

            <?php
                if($refus == 0){
                    echo'<p> Aucun suivi d\'élevage a été refusé </p>';
                }
                else{

            ?>   

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Elevage</th>
                        <th>Taille</th>
                        <th>Adresse</th>
                        <th>Code Postal</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Etat de la demande</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($elevage_suivi as $e){

                            if($e['etat']=="Refuser"){

                                    echo '<tr>
                                            <td>'.$e['nomElevage'].'</td>
                                            <td>'.$e['tailleElevage'].'</td>
                                            <td>'.$e['adresse'].'</td>
                                            <td>'.$e['codePostal'].'</td>
                                            <td>'.$e['email'].'</td>
                                            <td>'.$e['telephone'].'</td>
                                            <td>'.$e['etat'].'</td>
                                        </tr>';
                            }
      
                        }
                    ?>
                </tbody>
            </table>

            <?php
                }
            ?>
        </div>
        
    </div>

</body>

</html>