<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("<?php echo base_url(); ?>assets/img/pigtheme.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Montserrat", Arial, Helvetica, sans-serif;
        }

        /* start (custom style) */
        input[type=text] {
            width: 350px;
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
            border-radius: 20px;
        }

        label {
            margin: 40px;
        }

        .mybtn {
            border: none;
            border-radius: 50px;
            width: 300px;
            padding: 10px;
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        h4{
            color: grey;
            margin-top: 20px;
            margin-bottom: 50px;
        }
        
        #container1 {
            padding: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        
        select{
            width: 300px;
            border-radius: 5px;
            height: 50px;
            margin-bottom: 50px;
        }

        #main{
            margin-top:90px;
            padding: 10px;
        }

        #titre{
            color: grey;
            padding-left: 20px;
            margin-left: 1.5vw;
            margin-bottom: 7vh;
        }

        #button-add{
            margin-top: 10vh;
        }

        #categ{
            margin-left: 4vw;
        }      
    </style>
</head>

<div class="container" id="main">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="form mt-5">

                <?php
                    //echo validation_errors();
                    //$attributes = array('name' => 'login_data');
                    //echo form_open('fiches/add_fiche' , $attributes);
                ?>
                    <div class="form-group">
                        
                    <select class="select" name="categ" id="categ">
                        <option value="1" hidden class="statut">Catégories</option>
                        <?php
                            foreach($categoriesG as $c){  
                                        echo '<option value = "'.$c['nomCategorieG'].'">'.$c['nomCategorieG'].'</option>';    
                            }   
                        ?>
                    </select>
                    </div>

                    <div class="form-group col-md-12">
                        <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre de la fiche"/>
                    </div>

                    <div class="form-group col-md-12">
                        <input type="file" name="fiche" id="fiche" class="form-control"/>
                        <p class="d-inline-block" style="font-size:1em;">Seuls le format .pdf est autorisé jusqu'à une taille maximale de 2 Mo.</p>
                    </div>

                    <div class="col-md-12 text-center ">
                        <input type="submit" id=button-add class="btn btn-block mybtn btn-success" value="Upload">               
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


<script>
    alert("La fonctionnalité afin d'ajouter des fiches conseils est en cours de développement")
</script>
