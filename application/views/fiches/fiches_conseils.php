<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>O'porctunité Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css" />


    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script src="/assets/js/starrr.js"></script>
    <link rel="stylesheet" href="/assets/css/starrr.css">

    

    <style>
      
         body{
      
        background-color:   #C0C0C0;
      }
        h4 {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        label {
            margin: 40px;
        }
        
        .mybtn1 {
            border: none;
            border-radius: 50px;
            background-color: #ffffff;
            color: #87C165;
            width: 300px;
            padding: 10px;
            margin-top: 20px;
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .mybtnIMP {
            border: none;
            border-radius: 50px;
            background-color: #ffffff;
            color: grey;
            width: 300px;
            padding: 10px;
            margin-top: 20px;
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .btnsearch {
            margin: 0;
            width: 50px;
            height: 70px;
            text-align: center;
            background-color: white;
            border: none;
            border-radius: 6px;
        }
        
        .zone_text {
            width: 800px;
            height: 400px;
            text-align: center;
            background-color: white;
            border: 1px solid;
            border-radius: 6px;
        }
        
        .container1 {
            padding: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        
        .container2 {
            padding: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-top: 50px;
        }
        
        select {
            width: 300px;
            border-radius: 5px;
            height: 50px;
        }
        
        #vfiches {
            margin-top: 50px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        
        .notation {
            padding: 20px;
        }
          
        input {
            width: 30px;
            margin: 10px 0;
        }

        #modal-body{
            text-align: center;
        }

        #ajouterNote{
            margin: auto;
            width: 50%;
        }

        #myModal{
            color: #818181;
        }

        #fiche{
            margin: 20px;
            width: 20vw;
            background-color: white;
            color: black;
            text-align: center;
            border-radius: 5px;
            border: solid black 1.5px;
        }

        #fiche h5{
            padding-top: 15px;
        }

        #fiche p{
            font-size: .85rem;
        }

        #commentaire-container{
            margin-top: 3vh;
            margin-left: 7vw;
        }

        #espaceCommentaire{
            margin-top: 2.5vh;
            text-align: center;
        }
        
    </style>

</head>

<body>
   <div id="main">
        <div class="container-fluid">
            <h4 class="text-center">
                <?php
                    foreach($fiche as $f){
                        echo $f['titreFiche'];
                    }
                ?>
            </h4>
            <div id="vfiches" class="text-center">

                <?php

                    foreach($fiche as $f){
                        echo '<embed class="zone_text" src="'.base_url().''.$f['urlImage'].'" type="application/pdf"/>';
                    }
                
                ?>

                <div class="notation">
                    <div class="note">
                        <h5>Note globale :</h5> 
                            <?php

                                foreach($moyenne as $m){

                                    $com = $m['commentaireAvis'];
                                }

                                if($com == ""){
                                    echo "La fiche n'a pas encore de note";
                                }
                                else{
                                    foreach($moyenne as $m){
                                        $note = round($m['noteMoyenne'], 2.2);
                                        echo $note;

                                        echo(makeRating($note));
                                    }
                                }


                                function makeRating($rate, $bestvalue = 5) {
                                    // extraction de la partie entière de la note (qu'elle soit décimale ou non)
                                    $intrate=intval($rate);				
                                    // calcul de la partie décimale éventuelle en %
                                    $decrate=(floatval($rate) - $intrate) * 100;
                                    //  insertion des microformats et microdatas
                                    $ratingBox  = '						<!-- item AggregateRating -->' . PHP_EOL;
                                    $ratingBox .= '				<p class="ratingBox" itemprop="aggregateRating" itemscope itemtype="http://schema.xyz/AggregateRating">' . PHP_EOL;
                                    $ratingBox .= '				<span title="'. $rate .' / '. $bestvalue .'">' . PHP_EOL;
                                    // génération du nombre d'étoiles correspondant au maximum possible
                                    for($i=0; $i<$bestvalue; ++$i) {
                                    $ratingBox .= '				<svg height="16" width="16">' . PHP_EOL;
                                      // étoile(s) totalement jaune(s) calculée(s) sur la valeur entière de la note
                                      if($i<$intrate) {
                                        $ratingBox .= '				  <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="Yellow" stroke="DarkKhaki" stroke-width=".5" />' . PHP_EOL;
                                      }
                                      elseif($i==$intrate && $decrate>0 ) {
                                      // étoile partiellement jaune basée sur la valeur décimale de la note
                                        $ratingBox .= '				  <defs>' . PHP_EOL;
                                        $ratingBox .= '				     <linearGradient id="starGradient">' . PHP_EOL;
                                        $ratingBox .= '				       <stop offset="'. $decrate .'%" stop-color="Yellow"/>' . PHP_EOL;
                                        $ratingBox .= '				       <stop offset="'. $decrate .'%" stop-color="LightGrey"/>' . PHP_EOL;
                                        $ratingBox .= '				     </linearGradient>' . PHP_EOL;
                                        $ratingBox .= '				  </defs>' . PHP_EOL;
                                        $ratingBox .= '				  <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="url(#starGradient)" stroke="DarkKhaki" stroke-width=".5" />' . PHP_EOL;
                                      }
                                      else {
                                      // étoile(s) grise(s) pour la fin
                                        $ratingBox .= '				  <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5"  fill="LightGrey" stroke="DimGray" stroke-width=".5" />' . PHP_EOL;
                                      }
                                      $ratingBox .= '				</svg>' . PHP_EOL;
                                    }
                                    $ratingBox .= '				</span>' . PHP_EOL;
                                    //  insertion de la note en texte clair mais masqué, avec microformat et microdata - supprimer style="display:none;" pour l'afficher
                                    $ratingBox .= '				<span style="display:none;"><span itemprop="ratingValue" class="rating" title="'. $rate .'">'. $rate .'</span>';
                                    $ratingBox .= '<span > / </span><span itemprop="bestRating">'. $bestvalue .'</span></span>' . PHP_EOL;
                                    $ratingBox .= '				</p>' . PHP_EOL;
                                    $ratingBox .= '						<!-- end of item -->' . PHP_EOL;
                                    return $ratingBox;
                                  }
                                
                            ?>

                            

                        <div class='starrr' id='star1'></div>
                        <div>&nbsp;
                            <span class='your-choice-was1' style='display: none;'>
                                Votre note est de
                                <span class='choice1'>
                                    
                                </span>.
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="note">
                        <h5>Votre note :</h5>

                        <?php

                                if(empty($maNote)){
                                    echo "Vous n'avez pas encore attribué de note";
                                }
                                else{
                                    foreach($maNote as $m){
                                        $note = round($m['noteAvis'], 2.2);
                                        echo $note;

                                        echo(makeRating($note));
                                    }
                                }
                                
                            ?>

                        <div class='starrr' id='star2'></div>
                        <div>&nbsp;
                            <span class='your-choice-was2' style='display: none;'>
        Votre note est de <span class='choice2'></span>.
                            </span>
                        </div>
                    </div>


                    <div>
                        <?php
                        if(empty($maNote)){
                            echo '<button type="button" class="btn btn-block mybtn1 btn-success" data-toggle="modal" data-target="#myModal">Noter la fiche</button>';
                        }
                        else{
                            echo '<button type="submit" class=" btn btn-block mybtn1 btn-success">Plus de details</button>';
                        }
                        ?>
                            

                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="container2">
                    <div>
                        <form action="fiches/fiches" method="POST">
                            <button type="submit" class=" btn btn-block mybtn1 btn-success">Précedent</button>
                        </form>
                    </div>
                    <div>
                            <?php
                                foreach($fiche as $f){
                                    if(empty($fiche_fav)){
                                        echo validation_errors();
            
                                        echo form_open('fiches/add_favoris');

                                        echo '<input name="titre_fiche" id="titre_fiche" type="text" value="'.$f['titreFiche'].'" hidden>
                                        <button type="submit" class=" btn btn-block mybtnIMP btn-success">Ajouter aux Favoris </button>
                                        </form>';
                                    }
                                    else{
                                        echo validation_errors();
            
                                        echo form_open('fiches/delete_favoris');

                                        echo '<input name="titre_fiche" id="titre_fiche" type="text" value="'.$f['titreFiche'].'" hidden>
                                        <button type="submit" class=" btn btn-block mybtnIMP btn-success">Supprimer des Favoris </button>
                                        </form>';
                                    }
                                    
                                }
                            ?>
                    </div>
                </div>
            </div>

        </div>
        
    </div>

    <div id="espaceCommentaire">

        <?php 
            echo '<h3>Commentaire ( '.sizeof($avis).' )</h3>';
        ?>
    
        <div class="row" id="commentaire-container">
            <?php

                if(sizeof($avis)==0){
                    echo '<div class="col" id="fiche">
                            <h5> <em> Aucun commentaire trouvé </em></h5>
                        </div>';
                }
                else{

                    foreach($avis as $a){ 
                        $note = $a['noteAvis']; 
                        echo '<div class="col-3" id="fiche">
                                <h5>'.$a['type_utilisateur'].'</h5>
                                <h6>Note : '.$a['noteAvis'].' /5</h6>';
                                echo(makeRating($note));
                                echo '<p> Commentaire : </p>
                                <p>'.$a['commentaireAvis'].'</p>
                            </div>';                
                    }
                }            
            ?>
        </div>
    </div>


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <?php
                echo validation_errors();
            
                echo form_open('fiches/noter');
            ?>

                <div class="modal-content" id="modal-body">
                    <div class="modal-header">
                        
                        <h4 class="text-center">
                            <?php
                                foreach($fiche as $f){
                                    echo $f['titreFiche'];
                                    echo '<input name="titre_fiche" id="titre_fiche" type="text" value="'.$f['titreFiche'].'" hidden>';
                                }
                            ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Noter la fiche conseil ( /5 )</p>
                        <input pattern="[0-5]{1}" min="0" max="5" id="ajouterNote" name="ajouterNote" class="form-control" type="number" required>
                        <br>
                        <p>Commentaire</p>
                        <input id="commentaire" name="commentaire" class="form-control" type="text" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Noter</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


