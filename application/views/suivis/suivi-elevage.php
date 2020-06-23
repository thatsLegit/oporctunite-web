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
            margin-top:100px;
            padding: 10px;
        }
        h2, h5, p {
            color: #818181;
        }
        #menu-accueil {
            background-color: whitesmoke;
            margin: auto;
            display: block;
            margin-top: 10vh;
            margin-bottom: 10vh;
        }
    </style>
</head>

<div class="container" id='main'>
    <div class="row">
        <div class="col-12">
            <h4 style="margin:30px 0px;">Vétérinaires possédant un compte O'porctunité :</h4>   
        </div>
    </div>   

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
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
                                if(empty($veterinaire_suivi)){
                                    echo validation_errors();
                                    echo form_open('suivis/demander_suivi');
                                        echo '<tr>
                                            <td>'.$v['nomCabinet'].'</td>
                                            <td>'.$v['adresse'].'</td>
                                            <td>'.$v['codePostal'].'</td>
                                            <td>'.$v['email'].'</td>
                                            <td>'.$v['telephone'].'</td>
                                            <td> &nbsp </td>
                                            <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                            <td><button id="button" type="submit" class="btn btn-success">Demander le suivi</button></td>
                                        </tr>
                                    </form>';
                                } else {
                                    foreach($veterinaire_suivi as $v_s){
                                        if($v['numVeterinaire'] == $v_s['numVeterinaire']){
                                            if($v_s['etat'] == "En Cours"){
                                                echo validation_errors();
                                                echo form_open('suivis/annuler_suivi');
                                                    echo '<tr>
                                                        <td>'.$v['nomCabinet'].'</td>
                                                        <td>'.$v['adresse'].'</td>
                                                        <td>'.$v['codePostal'].'</td>
                                                        <td>'.$v['email'].'</td>
                                                        <td>'.$v['telephone'].'</td>
                                                        <td>'.$v_s['etat'].'</td>
                                                        <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                                        <td><button type="submit" class="btn btn-warning">Annuler demande</button></td>
                                                    </tr>
                                                </form>';
                                            } elseif($v_s['etat'] == "Accepté"){
                                                echo validation_errors();
                                                echo form_open('suivis/ne_plus_suivre');
                                                    echo '<tr>
                                                        <td>'.$v['nomCabinet'].'</td>
                                                        <td>'.$v['adresse'].'</td>
                                                        <td>'.$v['codePostal'].'</td>
                                                        <td>'.$v['email'].'</td>
                                                        <td>'.$v['telephone'].'</td>
                                                        <td>'.$v_s['etat'].'</td>
                                                        <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                                        <td><button type="submit" class="btn btn-danger">Ne plus suivre</button></td>
                                                    </tr>
                                                </form>';
                                            } elseif($v_s['etat'] == "Refusé" || $v_s['etat'] == "Annulé"){
                                                echo validation_errors();
                                                echo form_open('suivis/demander_suivi');
                                                    echo '<tr>
                                                        <td>'.$v['nomCabinet'].'</td>
                                                        <td>'.$v['adresse'].'</td>
                                                        <td>'.$v['codePostal'].'</td>
                                                        <td>'.$v['email'].'</td>
                                                        <td>'.$v['telephone'].'</td>
                                                        <td>'.$v_s['etat'].'</td>
                                                        <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                                        <td><button id="button" type="submit" class="btn btn-success">Demander le suivi</button></td>
                                                    </tr>
                                                </form>';
                                            }  
                                        }      
                                    }
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>