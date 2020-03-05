<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Webslesson | <?php echo $title; ?></title> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/css/style.css" rel="stylesheet">
</head>

<body>

    <div id="titre">
        <h3 class="text-center mt-5">O'porctunité</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="form mt-5">
                   <?php
                    echo validation_errors();
                    
                    // form_open('controller/function)
                    echo form_open('c_accueil_elevage/affiche_home_elevage');
                    ?>
                    
                        <div class="form-group">
                            <select class="custom-select mb-3">
                                <option value="" hidden class="statut">Statut</option>
                                <option value="1">Elevage</option>
                                <option value="2">Veterinaire</option>
                            </select>

                            <div class="form-group">

                                <input type="text" name="login" class="form-control" />
                    
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control" />
                                <span class="text-danger">
                                </span>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                    <label class="custom-control-label" for="defaultUnchecked">Rester connecté</label>
                                </div>

                                <!-- FORGOT PWD -->
                                <p class="mt-2 mb-4"><a href="" class="text-center">Mot de passe oublié ?</a></p>

                            </div>

                            <div class="col-md-12 text-center ">
                               <input type="submit" class=" btn btn-block mybtn btn-success" value="Connexion">
                               </form>
                                <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>
                            </div>
 
                            <div class="col-md-12 ">
                                <div class="login-or">
                                    <hr class="hr-or">
                                    <span class="span-or">Ou</span>
                                </div>
                            </div>

                            <div class="col-md-12 text-center ">
                            </div>
                                <button type="submit " class=" btn btn-block mybtn btn-light btn-inscription">Inscription</button>
                            </div>

                        </div>
                        
                    
                    </div>
                </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
