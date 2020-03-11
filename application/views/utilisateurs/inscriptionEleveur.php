<div>
    <h3 class="text-center mt-5"><?= $title ?></h3>
</div>


        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="form mt-5">

                        <?php echo validation_errors(); ?>
                        <?php echo form_open('utilisateurs/inscriptionEleveur'); ?>

                            <div class="text-center mt-5">
                                <div class="form-group">
                                    <a href="<?php echo base_url(); ?>utilisateurs/inscriptionVeterinaire" class="btn btn-primary btn-lg">Veterinaire</a>
                                    <a href="<?php echo base_url(); ?>utilisateurs/inscriptionEleveur" class="btn btn-primary btn-lg">Eleveur</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="numEleveur" class="form-control" aria-describedby="emailHelp" placeholder="Num Eleveur">
                            </div>
                            
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password2" class="form-control" aria-describedby="emailHelp" placeholder="Confirmez le mot de passe">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="email">
                            </div>

                            <div class="form-group">
                                <input type="tel" name="telephone" class="form-control" aria-describedby="emailHelp" placeholder="Telephone">
                            </div>

                            <div class="form-group">
                                <input type="text" name="NomElevage" class="form-control" aria-describedby="emailHelp" placeholder="Nom de l'elevage">
                            </div>

                            <div class="form-group">
                                <input type="text" name="tailleElevage" class="form-control" aria-describedby="emailHelp" placeholder="Taille de votre elevage">                                
                            </div>

                            <div class="form-group">
                                <input type="text" name="codePostal" class="form-control" aria-describedby="emailHelp" placeholder="code postal">                              
                            </div>

                            <div class="col-md-12 text-center ">
                                <button type="submit" class=" btn btn-block mybtn btn-success">S'inscrire</button>
                            </div>

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>