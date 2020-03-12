<body onload="cacher()">

<div id="titre">
    <h3 class="text-center mt-5">O'porctunité</h3>
</div>
<div class="container">
    <div class="col-md-5 mx-auto">
        <div class="form mt-5">
            <select onchange="changer();" id="selectchange" class="custom-select mb-2">
                <option value="1">Elevage</option>
                <option value="2">Veterinaire</option>
            </select>
        </div>
    </div>
</div>

<div class="container" id="elevage">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="form mt-5">
                <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('utilisateurs/inscription'); ?>

                <input type="hidden" name="type_utilisateur" value="elevage">

                <div class="form-group">
                    <input type="text" name="numEleveur" class="form-control" aria-describedby="emailHelp" placeholder="identifiant eleveur">
                </div>
                
                <div class="form-group">
                    <input type="text" name="nomElevage" class="form-control" aria-describedby="emailHelp" placeholder="Nom de l'elevage">
                </div>

                <div class="form-group">
                    <input type="text" name="tailleElevage" class="form-control" aria-describedby="emailHelp" placeholder="Taille de votre elevage">
                </div>

                <div class="form-group">
                    <input type="tel" name="telephone" class="form-control" aria-describedby="emailHelp" placeholder="Telephone">
                </div>

                <div class="form-group">
                    <input type="text" name="codePostal" class="form-control"aria-describedby="emailHelp" placeholder="Code postal">
                </div>

                <div class="form-group">
                    <input type="text" name="adresse" class="form-control"aria-describedby="emailHelp" placeholder="Adresse">
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control"ria-describedby="emailHelp" placeholder="email">
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe">
                </div>

                <div class="form-group">
                    <input type="password" name="password2" class="form-control" aria-describedby="emailHelp" placeholder="Confirmez le mot de passe">
                </div>

                <div class="col-md-12 text-center ">
                    <button type="submit" class=" btn btn-block mybtn btn-success">S'inscrire</button>
                </div>
                <?php echo form_close(); ?>
                                                      
                            
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title" style="color:black">Conditions d'utilisations</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="padding: 5px; color:black">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias 
                                    possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis 
                                    quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae 
                                    tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, 
                                    consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis 
                                    facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a 
                                    suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.
                                </p>
                            </div>

                            <div class="custom-control custom-checkbox" style="color:black">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked" required>
                                <label class="custom-control-label text-secondary mt-2" for="defaultUnchecked">Accepter les conditions</label>
                            </div>
                            <div class="custom-control custom-checkbox" style="color:black">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked1">
                                <label class="custom-control-label text-secondary mt-2" for="defaultUnchecked1">J'accepte de partager mes données</label>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-block mybtn btn-info btn-lg">Valider</button>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>




<div class="container" id="veterinaire">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="form mt-5">
            <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('utilisateurs/inscription'); ?>

                <input type="hidden" name="type_utilisateur" value="veterinaire">

                <div class="form-group">
                    <input type="text" name="numVeterinaire" class="form-control" aria-describedby="emailHelp" placeholder="identifiant vétérinaire">
                </div>
                
                <div class="form-group">
                    <input type="text" name="nomCabinet" class="form-control" aria-describedby="emailHelp" placeholder="Nom du cabinet">
                </div>

                <div class="form-group">
                    <input type="tel" name="telephone" class="form-control" aria-describedby="emailHelp" placeholder="Telephone">
                </div>

                <div class="form-group">
                    <input type="text" name="codePostal" class="form-control"aria-describedby="emailHelp" placeholder="Code postal">
                </div>

                <div class="form-group">
                    <input type="text" name="adresse" class="form-control"aria-describedby="emailHelp" placeholder="Adresse">
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control"ria-describedby="emailHelp" placeholder="email">
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe">
                </div>

                <div class="form-group">
                    <input type="password" name="password2" class="form-control" aria-describedby="emailHelp" placeholder="Confirmez le mot de passe">
                </div>

                <div class="col-md-12 text-center ">
                    <button type="button" class=" btn btn-block mybtn btn-success">S'inscrire</button>
                </div>
                <?php echo form_close(); ?>               
                            
                            
                <!-- The Modal -->
                <div class="modal" id="myModal1">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title" style="color:black">Conditions d'utilisations</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="color:black; padding:5px">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias 
                                possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis 
                                quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae 
                                tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, 
                                consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis 
                                facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a 
                                suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.
                                </p>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked2" required>
                                <label class="custom-control-label text-secondary mt-2" for="defaultUnchecked2">Accepter les conditions</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked3">
                                <label class="custom-control-label text-secondary mt-2" for="defaultUnchecked3">J'accepte de partager mes données</label>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-block mybtn btn-info btn-lg" >Valider</button>
                            </div>
                        </div>
                    </div>
                </div>
                  
            </div>
        </div>
    </div>
</div>


<script>
    function cacher() {

        document.getElementById("elevage").style.display = "block";
        document.getElementById("veterinaire").style.display = "none";
    }

    function changer() {

        if (document.getElementById("selectchange").selectedIndex == 0) {
            document.getElementById("elevage").style.display = "block";
            document.getElementById("veterinaire").style.display = "none";
        } else if (document.getElementById("selectchange").selectedIndex == 1) {
            document.getElementById("elevage").style.display = "none";
            document.getElementById("veterinaire").style.display = "block";
        }
    }

</script>