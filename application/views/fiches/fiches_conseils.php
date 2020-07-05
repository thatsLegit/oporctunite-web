<head>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script src="/assets/js/starrr.js"></script>
    <link rel="stylesheet" href="/assets/css/starrr.css">
    <style>
      
        body {   
            margin: 0;
            padding: 0;
            background-color:   #C0C0C0;
            font-family: "Montserrat", Arial, Helvetica, sans-serif;
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
            padding: 10px;
            margin-top: 20px;
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        select {
            width: 300px;
            border-radius: 5px;
            height: 50px;
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
            width: 200px;
            height: auto;
            background-color: white;
            color: black;
            text-align: center;
            border-radius: 5px;
            border: solid black 1.5px;
        }

        #fiche h5{
            padding: auto;
        }

        #fiche p{
            padding:auto;
        }

        #commentaire-container{
            margin-top: 3vh;
            margin-left: 7vw;
        }

        #main {
            margin-top:90px;
            padding: 10px;   
        }
        
    </style>
</head>

<div class="container" id="main">
    <div class="row">
        <div class="col-6">
            <div class="float-left">
                <form action="fiches/fiches" method="POST">
                    <button type="submit" class=" btn mybtn1 btn-success">Retour aux fiches</button>
                </form>
            </div>
        </div>

        <div class="col-6">
            <div class="float-right">
                <div>
                    <?php
                        foreach($fiche as $f){
                            if(empty($fiche_fav)){
                                echo validation_errors();
                                echo form_open('fiches/add_favoris');

                                echo '<input name="titre_fiche" id="titre_fiche" type="text" value="'.$f['titreFiche'].'" hidden>
                                <button type="submit" class=" btn mybtnIMP btn-success">Ajouter aux Favoris </button>
                                </form>';
                            } else {
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

    <div class="text-center">
        <h4>
            <?php
                foreach($fiche as $f){
                    echo $f['titreFiche'];
                }
            ?>
        </h4>
    </div>

    <div class="row">
        <div class="col">

            <?php
                foreach($fiche as $f){
                    echo '  <div class="embed-responsive embed-responsive-16by9">
                                <object class="embed-responsive-item" data="'.base_url().''.$f['urlImage'].'" type="application/pdf" width="100%" height="800px"> 
                                <p>Votre naviguateur ne permet pas de visualiser des fichiers pdf, vous pouvez <a href="/media/post/bootstrap-responsive-embed-aspect-ratio/example.pdf">télécharger</a> 
                                la fiche ou essayer sur un autre naviguateur.</p>
                                </object>
                            </div>';
                }              
            ?>

        </div>
    </div>

    <div class="row">
        <div class="notation">
            <div class="col">
                <div class="note">

                    <?php
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

                        if(empty($anyNote)){
                            echo "La fiche n'a pas encore été noté";
                        } else {
                            foreach($moyenne as $m){
                                $note = round($m['noteMoyenne'], 2);
                                echo $note;
                                echo(makeRating($note));
                            }
                        }
                    ?>
                        
                    <div class='starrr' id='star1'>
                    </div>
                    <div>&nbsp;
                        <span class='your-choice-was1' style='display: none;'>
                            <span class='choice1'>
                            </span>.
                        </span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="note">
                    <h5>Votre note :</h5>
                    <?php
                        if(empty($maNote)){
                            echo "Vous n'avez pas encore attribué de note";
                        } else {
                            foreach($maNote as $n){
                                $note = round($n['noteAvis'], 2);
                                echo $note;
                                echo(makeRating($note));
                            }
                        }     
                    ?>

                    <div class='starrr' id='star2'>
                    </div>
                    <div>&nbsp;
                        <span class='your-choice-was2' style='display: none;'>
                            <span class='choice2'></span>.
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
                <?php
                if(empty($maNote)){
                    echo '<button type="button" class="btn mybtn1 btn-success" data-toggle="modal" data-target="#myModal">Noter la fiche</button>';
                } else {
                    echo '<button type="submit" class=" btn mybtn1 btn-success btn-sm disabled">Plus de détails</button>';
                }
                ?>   
                
        </div>

    </div>

    <?php 
        echo '<h3 style="text-align:center;margin-top:50px">Commentaires ( '.sizeof($avis).' )</h3>';
    ?>

    <div class="row">
        <?php
            if(sizeof($avis)==0){
                echo '<div class="col" id="fiche">
                        <h5> <em> Soyez le premier à publier un commentaire ! </em></h5>
                    </div>';
            } else {

                foreach($avis as $a){ 
                    $note = $a['noteAvis']; 
                    echo '<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" id="fiche">
                            <div style="padding:auto;margin:auto;">
                                <h5>'.$a['type_utilisateur'].'</h5>
                                <h6>Note : '.$a['noteAvis'].' /5</h6>';
                                echo(makeRating($note));
                                echo '<p> Commentaire : </p>
                                <p>'.$a['commentaireAvis'].'</p>
                            </div>
                        </div>';                
                }
            }            
        ?>
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

</div>

