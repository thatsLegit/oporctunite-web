<head>
    <style>

        body {
            background: whitesmoke;
            color: #818181;
            margin: 0;
            padding: 0;
            font-family: "Montserrat",Arial, Helvetica, sans-serif;
        }

        #main {
            margin-top:120px;
            padding: 10px;
        }

        h2, h5, h4, p{
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
</head>

<div class="container" id="main">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h4 style="margin-bottom:30px;">Vétérinaires possédant un compte O'porctunité :</h4>   
        </div>
    </div>   
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
                        } else {
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