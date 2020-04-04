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

</style>

<body>
    <div id="main" class="text-center">
        <div id="menu-accueil">
            <h2 class="title">Bienvenue 
                <?php
                    echo "<h5>".$this->session->userdata('nom')."</h5>";
                ?>
            </h2>
        </div>

        <div class="container">
            <p>Vétérinaire possédant un compte O'porctunité :</p>
            <br>          
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Cabinet</th>
                        <th>Adresse</th>
                        <th>Code Postal</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Etat de la demande</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($veterinaire as $v){

                            $nb = sizeof($veterinaire_suivi);
                            $i = 0;

                            foreach($veterinaire_suivi as $v_s){
                                if($v['numVeterinaire'] == $v_s['numVeterinaire']){

                                    if($v_s['etat']=="En Cours"){

                                        echo validation_errors();
            
                                        echo form_open('Utilisateurs/supprimer_suivi');

                                            echo '<tr>
                                                <td>'.$v['nomCabinet'].'</td>
                                                <td>'.$v['adresse'].'</td>
                                                <td>'.$v['codePostal'].'</td>
                                                <td>'.$v['email'].'</td>
                                                <td>'.$v['telephone'].'</td>
                                                <td>'.$v_s['etat'].'</td>
                                                <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                                <td><button id="button" type="submit" class="btn btn-warning">Annuler Suivi</button></td>
                                            </tr>
                                        </form>';
                                    }

                                    elseif($v_s['etat']=="Accepter"){

                                        echo validation_errors();
            
                                        echo form_open('Utilisateurs/supprimer_suivi');

                                            echo '<tr>
                                                <td>'.$v['nomCabinet'].'</td>
                                                <td>'.$v['adresse'].'</td>
                                                <td>'.$v['codePostal'].'</td>
                                                <td>'.$v['email'].'</td>
                                                <td>'.$v['telephone'].'</td>
                                                <td>'.$v_s['etat'].'</td>
                                                <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                                <td><button id="button" type="submit" class="btn btn-danger">Supprimer Suivi</button></td>
                                            </tr>
                                        </form>';
                                    }

                                    elseif($v_s['etat']=="Refuser"){

                                        echo validation_errors();
            
                                        echo form_open('Utilisateurs/demander_suivi');

                                            echo '<tr>
                                                <td>'.$v['nomCabinet'].'</td>
                                                <td>'.$v['adresse'].'</td>
                                                <td>'.$v['codePostal'].'</td>
                                                <td>'.$v['email'].'</td>
                                                <td>'.$v['telephone'].'</td>
                                                <td>'.$v_s['etat'].'</td>
                                                <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                                <td><button id="button" type="submit" class="btn btn-success">Demander Suivi</button></td>
                                            </tr>
                                        </form>';
                                    }
                                        
                                }
                                else{
                                    $i++;
                                }
                                
                            }

                            if($nb == $i){
                                echo validation_errors();
            
                                echo form_open('Utilisateurs/demander_suivi');

                                    echo '<tr>
                                        <td>'.$v['nomCabinet'].'</td>
                                        <td>'.$v['adresse'].'</td>
                                        <td>'.$v['codePostal'].'</td>
                                        <td>'.$v['email'].'</td>
                                        <td>'.$v['telephone'].'</td>
                                        <td> &nbsp </td>
                                        <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                        <td><button id="button" type="submit" class="btn btn-success">Demander Suivi</button></td>
                                    </tr>
                                </form>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
    </div>

    

</body>

</html>