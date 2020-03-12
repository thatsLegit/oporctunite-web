<div id="titre">
        <h3 class="text-center mt-5">O'porctunité</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="form mt-5">
                <?php
                echo validation_errors();
                echo form_open('utilisateurs/login');
                ?>      
                
                <div class="form-group">
                    <select class="custom-select mb-3" name="select">
                        <option value="" hidden class="statut">Statut</option>
                        <option value="elevage">Elevage</option>
                        <option value="veterinaire">Veterinaire</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required/>
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password" required/>
                    <span class="text-danger"></span>
                </div>

                <!-- COOKIES -->
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Rester connecté</label>
                    </div>

                    <!-- FORGOT PWD -->
                    <p class="mt-2 mb-4"><a href="utilisateurs/mdp_oublie" class="text-center">Mot de passe oublié ?</a></p>
                </div>

                <div class="col-md-12 text-center ">
                    <input type="submit" class=" btn btn-block mybtn btn-success" value="Connexion">               
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
   </div>
</div>