<div>
    <h3 class="text-center mt-5"><?= $title ?></h3>
</div>

 <!-- input type hidden pour le type de user -->
    <!-- input type file pour upload la photo -->

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="form mt-5">

                         <?php echo validation_errors(); ?>
                         <?php echo form_open('utilisateurs/inscriptionVeterinaire'); ?>

                            <div class="text-center mt-5">
                                <div class="form-group">
                                    <a href="<?php echo base_url(); ?>inscription" class="btn btn-primary btn-lg">Eleveur</a>
                                    <a href="<?php echo base_url(); ?>inscription" class="btn btn-primary btn-lg">Veterinaire</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="numVeterinaire" class="form-control" aria-describedby="emailHelp" placeholder="Numéro veterinaire">
                            </div>

                            <div class="form-group">
                                <input type="text" name="nomCabinet" class="form-control" aria-describedby="emailHelp" placeholder="nom du cabinet">                              
                            </div>
                           
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password2" class="form-control" aria-describedby="emailHelp" placeholder="Confirmez le mot de passe">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="email">
                            </div>

                            <div class="form-group">
                                <input type="text" name="telephone" class="form-control" aria-describedby="emailHelp" placeholder="Telephone">
                            </div>

                            <div class="form-group">
                                <input type="text" name="Code postal" class="form-control" id="codepostal" aria-describedby="emailHelp" placeholder="Code Postal">                                
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="adresse" class="form-control"  aria-describedby="emailHelp" placeholder="adresse">                                
                            </div>  

                            <div class="col-md-12 text-center ">
                                <button type="submit" class=" btn btn-block mybtn btn-success">S'inscrire</button>
                            </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>