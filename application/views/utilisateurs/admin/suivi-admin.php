<head>
    <style>

        body {
            background: whitesmoke;
            color: #818181;
            margin: 0;
            padding: 0;
            font-family: "Montserrat",Arial, Helvetica, sans-serif;
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
</head>

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
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($veterinaire as $v){

                                //echo validation_errors();
            
                                //echo form_open('Utilisateurs/bannir');

                                    echo '<tr>
                                        <td>'.$v['nomCabinet'].'</td>
                                        <td>'.$v['adresse'].'</td>
                                        <td>'.$v['codePostal'].'</td>
                                        <td>'.$v['email'].'</td>
                                        <td>'.$v['telephone'].'</td>
                                        <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                        <td><button id="button" type="submit" class="btn btn-danger">Bannir vétérinaire</button></td>
                                    </tr>';
                                //</form>';
                        }

                    ?>
                </tbody>
            </table>
        </div>


        <div class="container">
            <p>Élevage possédant un compte O'porctunité :</p>
            <br>          
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>Elevage</th>
                        <th>Taille</th>
                        <th>Adresse</th>
                        <th>Code Postal</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($elevage as $e){

                                //echo validation_errors();
            
                                //echo form_open('Utilisateurs/bannir');

                                    echo '<tr>
                                        <td>'.$e['nomElevage'].'</td>
                                        <td>'.$e['tailleElevage'].'</td>
                                        <td>'.$e['adresse'].'</td>
                                        <td>'.$e['codePostal'].'</td>
                                        <td>'.$e['email'].'</td>
                                        <td>'.$e['telephone'].'</td>
                                        <input name="numEleveur" id="numEleveur" type="text" value="'.$e['numEleveur'].'" hidden>
                                        <td><button id="button" type="submit" class="btn btn-danger">Bannir élevage</button></td>
                                    </tr>';
                                //</form>';
                        }

                    ?>
                </tbody>
            </table>
        </div>
        
    </div>

    <script>
    alert("La fonctionnalité afin de bannir un utilisateur est en cours de développement")
    </script>

</body>

</html>