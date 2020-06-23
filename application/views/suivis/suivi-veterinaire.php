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
            <h4 style="margin: 30px 0px;">Elevages que vous suivez :</h4>   
        </div>
    </div> 

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <?php
                    $accepter = 0;
                    foreach($elevages_suivis as $e){
                        if($e['etat'] == "Accepté"){
                            $accepter++;
                        }
                    }
                    if($accepter == 0){
                        echo'<p> Aucun suivi d\'élevage n\'a été accepté </p>';
                    } else {
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
                            foreach($elevages_suivis as $e){
                                if($e['etat'] == "Accepté"){  
                                    echo '<tr>
                                            <td>'.$e['nomElevage'].'</td>
                                            <td>'.$e['tailleElevage'].'</td>
                                            <td>'.$e['adresse'].'</td>
                                            <td>'.$e['codePostal'].'</td>
                                            <td>'.$e['email'].'</td>
                                            <td>'.$e['telephone'].'</td>
                                            <td>'.$e['etat'].'</td>';

                                            echo validation_errors();
                                            echo form_open('Suivis/ne_plus_suivre');
                                                echo '<input name="numEleveur" id="numEleveur" type="text" value="'.$e['numEleveur'].'" hidden>
                                                <td><button type="submit" class="btn btn-warning">Ne plus suivre</button></td>
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
        </div>
    </div>

    <div class="row">
        <div class='col-12'>
            <h4 style="margin: 30px 0px;">Elevages vous demandant un suivi :</h4> 
        </div>  
    </div> 

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <?php
                    $enCours = 0;
                    foreach($elevages_suivis as $e){
                        if($e['etat'] == "En Cours"){
                            $enCours++;
                        }
                    }
                    if($enCours == 0){
                        echo'<p> Aucune nouvelle demande de suivi </p>';
                    } else {
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
                            <th> </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($elevages_suivis as $e){
                                if($e['etat'] == "En Cours"){     
                                    echo '<tr>
                                            <td>'.$e['nomElevage'].'</td>
                                            <td>'.$e['tailleElevage'].'</td>
                                            <td>'.$e['adresse'].'</td>
                                            <td>'.$e['codePostal'].'</td>
                                            <td>'.$e['email'].'</td>
                                            <td>'.$e['telephone'].'</td>
                                            <td>'.$e['etat'].'</td>';

                                            echo validation_errors();
                                            echo form_open('Suivis/accepter_suivi');
                                                echo '<input name="numEleveur" id="numEleveur" type="text" value="'.$e['numEleveur'].'" hidden>
                                                <td><button type="submit" class="btn btn-success">Accepter</button></td>
                                            </form>';

                                            echo validation_errors();
                                            echo form_open('Suivis/refuser_suivi');
                                                echo '<input name="numEleveur" id="numEleveur" type="text" value="'.$e['numEleveur'].'" hidden>
                                                <td><button type="submit" class="btn btn-danger">Refuser</button></td>
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
        </div>
    </div>
</div>