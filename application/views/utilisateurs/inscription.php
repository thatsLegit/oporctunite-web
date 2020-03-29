<body onload="cacher()">

<div class="container">
    <div class="col-md-5 mx-auto">
        <div class="form mt-5">
            <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Qui êtes-vous ? </label></strong>
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
                <?php $data = array('id' => "formulaire"); ?>
                <?php echo form_open_multipart('utilisateurs/inscription', $data); ?>

                <input type="hidden" name="type_utilisateur" value="elevage">

                <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Votre elevage : </label></strong>
                <div class="form-group">
                    <input type="text" name="numEleveur" id="numEleveur" class="form-control" aria-describedby="emailHelp" placeholder="identifiant eleveur">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">L'identifiant professional doit comporter 7 caractères.</span>
                </div>
                
                <div class="form-group">
                    <input type="text" name="nomElevage" id="nomElevage" class="form-control" aria-describedby="emailHelp" placeholder="Nom de l'elevage">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le nom doit comporter au moins 2 caractères.</span>
                </div>

                <div class="form-group">
                    <input type="text" name="tailleElevage" id="tailleElevage" class="form-control" aria-describedby="emailHelp" placeholder="Taille de votre elevage">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer une taille d'élevage valide.</span>
                </div>

                <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Vos coordonnées : </label></strong>
                <div class="form-group">
                    <input type="text" name="ville" id="ville" class="form-control" aria-describedby="emailHelp" placeholder="Ville, commune, lieu-dit">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez renseigner ce champs.</span>
                </div>

                <div class="form-group">
                    <input type="text" name="adresse" id="adresse" class="form-control" aria-describedby="emailHelp" placeholder="Adresse">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez renseigner votre adresse.</span>
                </div>

                <div class="form-group">
                    <input type="text" name="codePostal" id="codePostal" class="form-control" aria-describedby="emailHelp" placeholder="Code postal">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un code postal valide.</span>
                </div>

                <div class="form-group">
                    <input type="tel" name="telephone" id="telephone" class="form-control" aria-describedby="emailHelp" placeholder="Telephone">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un numéro de téléphone valide.</span>
                </div>

                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="email">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer une email valide.</span>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le mot de passe doit comporter au moins 8 caractères.</span>
                </div>

                <div class="form-group">
                    <input type="password" name="password2" id="password2" class="form-control" aria-describedby="emailHelp" placeholder="Confirmez le mot de passe">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le mots de passe ne correspondent pas.</span>
                </div>

                <div class="form-group">
                    <strong><label style="color:rgb(0,177,77);font-size:1.5em">Choisissez une photo de profil</label> (optionnel)</strong>
                    <input type="file" onchange="handleFiles(files,preview);getoutput(this)" name="userfile" id="photo" size="20">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Attention : formats acceptés : png, jpg, gif.</span>
                    <div><label for="photo"><div id="preview" style="width:200px;"></div></label></div>
                </div>

                <div class="form-group">
                <div class="custom-control custom-checkbox" style="color:black">
                    <input type="checkbox" class="custom-control-input" id="cgu">
                    <label class="custom-control-label text-secondary mt-2" for="cgu">J'accepte les <a href="#" data-toggle="modal" data-target="#myModal">conditions générales d'Oporctunité</a></label>
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez accepter les CGU.</span>
                </div>
                </div><br>

                <div class="col-md-12 text-center ">
                    <button type="submit" class=" btn btn-block mybtn btn-success">S'inscrire</button>
                </div>
                </form>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title" style="color:black">Conditions d'utilisation</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="padding: 5px; color:black">
                                <p>Nous vous souhaitons la bienvenue sur ce site destiné aux éleveurs porcins qui souhaiteraient comparer le bien-être animal de leurs élevages, accéder à des fiches conseils spécialisées, effectuer des statistiques etc. Le site est disponible à l’adresse suivante : https://oporctunite.envt.fr. 
                                Nous vous invitons à lire attentivement les présentes Conditions d’Utilisation qui régissent la navigation sur ce Site. En utilisant le Site vous accepterez sans réserve les présentes Conditions d’Utilisation.
                                Le Site a été développé et édité par les étudiants de UT1, au 2 Rue du Doyen-Gabriel-Marty, 31042 Toulouse. Le site est hébergé par l’ENVT au 23 Chemin des Capelles, 31300 Toulouse.</p><br>
                                <h5>1. ACCES AU SITE</h5>
                                <p>Pour accéder et utiliser ce Site vous devez être un éleveur porcin et disposer d’une adresse de courrier électronique valide. Il est aussi possible d’y accéder si vous êtes vétérinaire. 
                                Lorsque vous créez un compte, vous pourrez être amené à remplir des champs obligatoires dans un formulaire, signalés comme tels par un astérisque. Dans ce cas, il est nécessaire que vous complétiez ces champs préalablement à votre inscription sur le Site. Toute inscription inexacte ou incomplète ne sera pas prise en compte.
                                Vous reconnaissez que les données que vous nous communiquez et qui sont stockées dans nos systèmes d’information sont exactes et valent preuve de votre identité. Nous vous remercions de bien vouloir nous faire part de toute éventuelle modification de ces données.
                                L’accès à son compte personnel nécessite l’utilisation de codes d’accès personnels. Dans ce cas, il vous appartient de prendre les mesures propres à assurer le secret de ces codes. Vous pourrez bien entendu les modifier à tout moment. Toutefois, le nombre de tentatives d’accès au Site et/ou à certaines de ses Rubriques pourra être limité afin de prévenir un usage frauduleux desdits codes. Nous vous invitons à nous informer de toute utilisation frauduleuse dont vous pourriez éventuellement avoir connaissance à l’adresse mail oporctunite@envt.fr.
                                En cas de non-respect des règles décrites dans les présentes Conditions d’Utilisation, nous nous réservons le droit de suspendre votre accès au Site. Dans ce cas, nous vous en informerons dans les meilleurs délais.
                                Bien que nous nous efforcions de maintenir le Site accessible à tout moment, nous ne pouvons pas vous garantir cet accès en toute circonstance. En effet, et notamment pour des raisons de maintenance, de mise à jour, ou pour toute autre raison que nous ne maîtriserions pas, l’accès au Site pourra être interrompu.</p><br>
                                <h5>2. PROPRIETE INTELLECTUELLE</h5>
                                <p>Le Site et chacun des éléments qui le composent (tels que marques, images, textes, vidéos, etc.) sont protégés au titre de la propriété intellectuelle. Le développement de ce Site a impliqué des investissements importants et un travail commun de la part de notre équipe. 
                                Pour cette raison, et sauf stipulation expresse incluse dans les présentes conditions, nous vous offrons la possibilité de consulter le Site pour votre usage strictement personnel et privé et d’imprimer les seules fiches conseils destinés aux utilisateurs disposant d’un compte personnel. Toute autre utilisation, reproduction ou représentation du Site (en tout ou partie) ou des éléments qui le composent, sur quelque support que ce soit, à d’autres fins, et notamment commerciales, n’est pas autorisée.</p><br>
                                <h5>3. UTILISATION DU SITE</h5>
                                <p>Nous vous rappelons qu’Internet ne permettant pas de garantir la sécurité, la disponibilité et l’intégrité des transmissions de données, nous ne pourrons pas être tenus responsables en cas d’erreurs, omissions, suppressions, retards, défaillances (notamment du fait de virus), des lignes de communication, du matériel informatique et des logiciels sur lesquels nous n’avons aucun contrôle ou encore en cas d’utilisation non autorisée ou de dégradation des éventuels contenus que vous pourriez publier sur ce Site.</p><br>
                                <h6>a. Obligations générales de l’Utilisateur</h6>
                                <p>Nous défendons des valeurs de tolérance et de respect d’autrui. Pour cette raison, ce Site ne peut être utilisé afin de véhiculer des propos racistes, violents, xénophobes, malveillants, obscènes ou encore illicites. 
                                En utilisant ce Site, vous vous interdisez de :
                                •	Diffuser un contenu préjudiciable, diffamatoire, non autorisé, malveillant, portant atteinte à la vie privée ou aux droits à l’image, incitant à la violence, à la haine raciale ou ethnique ;
                                •	Utiliser le Site pour faire de la politique, de la propagande ou du prosélytisme ;
                                •	Publier des contenus publicitaires ou promotionnels ;
                                •	Diffuser des informations ou contenus susceptibles de heurter la sensibilité des plus jeunes ;
                                •	Mener des activités illégales, notamment portant atteinte aux titulaires de droits sur des logiciels, marques, photographies, images, textes, vidéos etc.
                                Nous vous rappelons que vous devez détenir tous les droits et/ou autorisations sur les éventuels contenus que vous souhaiteriez publier sur ce Site. A ce titre, nous vous recommandons de ne pas publier de contenus (notamment des photographies) faisant apparaître des éléments d’architecture récents, des créations publicitaires ou encore des créations vestimentaires dont la marque pourrait apparaître (sigles, logos, etc.)..</p>
                                <h6>b. Stipulations particulières à certaines Rubriques</h6>
                                <p>Différentes Rubriques peuvent être mises à votre disposition sur ce Site : Contenus Téléchargeables, Espace visant à améliorer les fiches conseils, etc. (les « Rubrique(s) »).</p><br>
                                <h6>(i) Contenus Téléchargeables</h6>
                                <p>Nous pouvons être amenés à mettre à votre disposition sur ce Site des contenus que vous êtes autorisés à télécharger (les « Contenus Téléchargeables »). Il s’agit de fiches conseils mises à votre disposition. En téléchargeant ou en utilisant ces Contenus Téléchargeables, vous vous engagez à les utiliser conformément aux présentes Conditions d’Utilisation.
                                Nous vous concédons, pour vos seuls besoins personnels et privés, à titre gracieux et pour la durée légale de protection du droit d’auteur, un droit non exclusif et non transférable d’utilisation du Contenu Téléchargeable. En plus du droit concédé de reproduction à des fins privées et personnelles, il est possible de reproduire et afficher les fiches conseils uniquement dans un cadre pédagogique.</p><br>
                                <h6>(ii) Espace visant à l’amélioration des fiches conseils</h6>
                                <p>Nous pouvons être amenés à mettre à disposition sur ce Site un espace vous permettant de communiquer avec les administrateurs pour permettre des corrections ou améliorations des fiches conseils. (l’« Espace d’amélioration des fiches conseils»).
                                L’Espace d’amélioration des fiches conseils devra être utilisé conformément à la législation en vigueur, aux bonnes mœurs, aux principes énoncés aux présentes et dans le respect des droits d’autrui.</p><br>
                                <h5>4. INFORMATIONS CONTENUES SUR LE SITE</h5>
                                <h6>a. Dispositions générales</h6>
                                <p>Nous nous efforçons de vous délivrer des informations exactes et mises à jour. Toutefois, les transmissions de données et d’informations sur Internet ne bénéficiant que d’une fiabilité technique relative, nous ne pouvons vous garantir l’exactitude de l’ensemble des informations qui figurent sur ce Site.
                                Par ailleurs, nous vous rappelons que des inexactitudes ou omissions peuvent apparaître dans les informations disponibles sur ce Site notamment du fait d’intrusion de tiers. Nous vous invitons à nous signaler toute inexactitude ou omission à l’adresse suivante : oporctunite@envt.fr</p><br>

                                <h5>5. DONNEES A CARACTERE PERSONNEL</h5>
                                <p>Nous pouvons être amenés à collecter des données personnelles vous concernant, notamment lorsque vous (i) vous vous inscrivez sur le Site, (ii) téléchargez un Contenu Téléchargeable, (iii) répondez à un sondage ou à une étude.
                                Ces données à caractère personnel feront l’objet d’un traitement informatique destiné exclusivement à QUELLE SOCIETE ? et pourront être utilisées de la manière suivante :
                                •	Études statistiques : nous compilons et étudions vos données afin de définir votre profil et de mieux adapter nos services à vos attentes. Ces études statistiques sont strictement confidentielles ;
                                •	Suivi de la relation client : si vous nous faites parvenir un message, les données sont conservées et utilisées afin d’apporter une réponse à votre demande et d’en assurer le suivi ;
                                •	Fourniture de services : l’accès à certains espaces tels que l’espace d’amélioration des fiches conseils, etc.
                                Conformément à la Loi « Informatique et Libertés du 6 janvier 1978 modifiée en 2004, vous bénéficiez d’un droit d’accès, d’opposition, de rectification et de suppression des données qui vous concernent. Vous pouvez exercer ce droit à tout moment en adressant un courrier électronique, accompagné d’une photocopie de votre pièce d’identité ou de votre passeport, à l’adresse suivante : ADRESSE LAURA
                                Pour plus d’informations sur le traitement de vos données à caractère personnel, nous vous invitons à consulter notre Politique Données Personnelles accessible ici.</p><br>
                                 
                                <h5>6. MODIFICATION DU SITE ET DES CONDITIONS D’UTILISATION</h5>
                                <p>Nous pouvons être amenés à modifier les contenus et informations inclus dans ce Site ainsi que les présentes Conditions d’Utilisation, notamment afin de respecter toute nouvelle législation et/ou réglementation applicable et/ou afin d’améliorer le Site. Toute modification sera intégrée dans les présentes Conditions d’Utilisation.</p><br>
                                <h5>7. HEBERGEMENT</h5>
                                <p>L’hébergement de ce site est réalisé par l’École Nationale des Vétérinaires de Toulouse, située au 23 Chemin des Capelles, 31300 Toulouse.</p>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
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
                <?php $data = array('id' => "formulaire2"); ?>
                <?php echo form_open_multipart('utilisateurs/inscription', $data); ?>

                <input type="hidden" name="type_utilisateur" value="veterinaire">

                <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Votre cabinet : </label></strong>
                <div class="form-group">
                    <input type="text" name="numVeterinaire" id="numVeterinaire" class="form-control" aria-describedby="emailHelp" placeholder="identifiant vétérinaire">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">L'identifiant professional doit comporter 5 chiffres.</span>
                </div>
                
                <div class="form-group">
                    <input type="text" name="nomCabinet" id="nomCabinet" class="form-control" aria-describedby="emailHelp" placeholder="Nom du cabinet">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le nom doit comporter au moins 2 caractères.</span>
                </div>

                <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Vos coordonnées : </label></strong>
                <div class="form-group">
                    <input type="text" name="ville" id="ville2" class="form-control" aria-describedby="emailHelp" placeholder="Ville, commune, lieu-dit">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez renseigner ce champs.</span>
                </div>

                <div class="form-group">
                    <input type="text" name="adresse" id="adresse2" class="form-control"aria-describedby="emailHelp" placeholder="Adresse">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez renseigner votre adresse.</span>
                </div>

                <div class="form-group">
                    <input type="text" name="codePostal" id="codePostal2" class="form-control"aria-describedby="emailHelp" placeholder="Code postal">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un code postal valide.</span>
                </div>

                <div class="form-group">
                    <input type="tel" name="telephone" id="telephone2" class="form-control" aria-describedby="emailHelp" placeholder="Telephone">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un numéro de téléphone valide.</span>
                </div>

                <div class="form-group">
                    <input type="email" name="email" id="email2" class="form-control"ria-describedby="emailHelp" placeholder="email">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer une email valide.</span>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password3" class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le mot de passe doit comporter au moins 8 caractères.</span>
                </div>

                <div class="form-group">
                    <input type="password" name="password2" id="password4" class="form-control" aria-describedby="emailHelp" placeholder="Confirmez le mot de passe">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le mots de passe ne correspondent pas.</span>
                </div>

                <div class="form-group">
                    <strong><label style="color:rgb(0,177,77);font-size:1.5em">Choisissez une photo de profil</label> (optionnel)</strong>
                    <input type="file" onchange="handleFiles(files,preview2);getoutput(this)" name="userfile" id="photo2" size="20">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Attention : formats acceptés : png, jpg, gif.</span>
                    <div><label for="photo2"><div id="preview2" style="width:200px;"></div></label></div>
                </div>

                <div class="form-group">
                <div class="custom-control custom-checkbox" style="color:black">
                    <input type="checkbox" class="custom-control-input" id="cgu2">
                    <label class="custom-control-label text-secondary mt-2" for="cgu2">J'accepte les <a href="#" data-toggle="modal" data-target="#myModal2">conditions générales d'Oporctunité</a></label>
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez accepter les CGU.</span>
                </div>
                </div><br>

                <div class="col-md-12 text-center ">
                    <button type="submit" class=" btn btn-block mybtn btn-success">S'inscrire</button>
                </div>
                </form>

                <!-- The Modal -->
                <div class="modal" id="myModal2">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title" style="color:black">Conditions d'utilisation</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="padding: 5px; color:black">
                            <div class="modal-body" style="padding: 5px; color:black">
                                <p>Nous vous souhaitons la bienvenue sur ce site destiné aux éleveurs porcins qui souhaiteraient comparer le bien-être animal de leurs élevages, accéder à des fiches conseils spécialisées, effectuer des statistiques etc. Le site est disponible à l’adresse suivante : https://oporctunite.envt.fr. 
                                Nous vous invitons à lire attentivement les présentes Conditions d’Utilisation qui régissent la navigation sur ce Site. En utilisant le Site vous accepterez sans réserve les présentes Conditions d’Utilisation.
                                Le Site a été développé et édité par les étudiants de UT1, au 2 Rue du Doyen-Gabriel-Marty, 31042 Toulouse. Le site est hébergé par l’ENVT au 23 Chemin des Capelles, 31300 Toulouse.</p><br>
                                <h5>1. ACCES AU SITE</h5>
                                <p>Pour accéder et utiliser ce Site vous devez être un éleveur porcin et disposer d’une adresse de courrier électronique valide. Il est aussi possible d’y accéder si vous êtes vétérinaire. 
                                Lorsque vous créez un compte, vous pourrez être amené à remplir des champs obligatoires dans un formulaire, signalés comme tels par un astérisque. Dans ce cas, il est nécessaire que vous complétiez ces champs préalablement à votre inscription sur le Site. Toute inscription inexacte ou incomplète ne sera pas prise en compte.
                                Vous reconnaissez que les données que vous nous communiquez et qui sont stockées dans nos systèmes d’information sont exactes et valent preuve de votre identité. Nous vous remercions de bien vouloir nous faire part de toute éventuelle modification de ces données.
                                L’accès à son compte personnel nécessite l’utilisation de codes d’accès personnels. Dans ce cas, il vous appartient de prendre les mesures propres à assurer le secret de ces codes. Vous pourrez bien entendu les modifier à tout moment. Toutefois, le nombre de tentatives d’accès au Site et/ou à certaines de ses Rubriques pourra être limité afin de prévenir un usage frauduleux desdits codes. Nous vous invitons à nous informer de toute utilisation frauduleuse dont vous pourriez éventuellement avoir connaissance à l’adresse mail adresseDeLaura@outlook.com.
                                En cas de non-respect des règles décrites dans les présentes Conditions d’Utilisation, nous nous réservons le droit de suspendre votre accès au Site. Dans ce cas, nous vous en informerons dans les meilleurs délais.
                                Bien que nous nous efforcions de maintenir le Site accessible à tout moment, nous ne pouvons pas vous garantir cet accès en toute circonstance. En effet, et notamment pour des raisons de maintenance, de mise à jour, ou pour toute autre raison que nous ne maîtriserions pas, l’accès au Site pourra être interrompu.</p><br>
                                <h5>2. PROPRIETE INTELLECTUELLE</h5>
                                <p>Le Site et chacun des éléments qui le composent (tels que marques, images, textes, vidéos, etc.) sont protégés au titre de la propriété intellectuelle. Le développement de ce Site a impliqué des investissements importants et un travail commun de la part de notre équipe. 
                                Pour cette raison, et sauf stipulation expresse incluse dans les présentes conditions, nous vous offrons la possibilité de consulter le Site pour votre usage strictement personnel et privé et d’imprimer les seules fiches conseils destinés aux utilisateurs disposant d’un compte personnel. Toute autre utilisation, reproduction ou représentation du Site (en tout ou partie) ou des éléments qui le composent, sur quelque support que ce soit, à d’autres fins, et notamment commerciales, n’est pas autorisée.</p><br>
                                <h5>3. UTILISATION DU SITE</h5>
                                <p>Nous vous rappelons qu’Internet ne permettant pas de garantir la sécurité, la disponibilité et l’intégrité des transmissions de données, nous ne pourrons pas être tenus responsables en cas d’erreurs, omissions, suppressions, retards, défaillances (notamment du fait de virus), des lignes de communication, du matériel informatique et des logiciels sur lesquels nous n’avons aucun contrôle ou encore en cas d’utilisation non autorisée ou de dégradation des éventuels contenus que vous pourriez publier sur ce Site.</p><br>
                                <h6>a. Obligations générales de l’Utilisateur</h6>
                                <p>Nous défendons des valeurs de tolérance et de respect d’autrui. Pour cette raison, ce Site ne peut être utilisé afin de véhiculer des propos racistes, violents, xénophobes, malveillants, obscènes ou encore illicites. 
                                En utilisant ce Site, vous vous interdisez de :
                                •	Diffuser un contenu préjudiciable, diffamatoire, non autorisé, malveillant, portant atteinte à la vie privée ou aux droits à l’image, incitant à la violence, à la haine raciale ou ethnique ;
                                •	Utiliser le Site pour faire de la politique, de la propagande ou du prosélytisme ;
                                •	Publier des contenus publicitaires ou promotionnels ;
                                •	Diffuser des informations ou contenus susceptibles de heurter la sensibilité des plus jeunes ;
                                •	Mener des activités illégales, notamment portant atteinte aux titulaires de droits sur des logiciels, marques, photographies, images, textes, vidéos etc.
                                Nous vous rappelons que vous devez détenir tous les droits et/ou autorisations sur les éventuels contenus que vous souhaiteriez publier sur ce Site. A ce titre, nous vous recommandons de ne pas publier de contenus (notamment des photographies) faisant apparaître des éléments d’architecture récents, des créations publicitaires ou encore des créations vestimentaires dont la marque pourrait apparaître (sigles, logos, etc.)..</p>
                                <h6>b. Stipulations particulières à certaines Rubriques</h6>
                                <p>Différentes Rubriques peuvent être mises à votre disposition sur ce Site : Contenus Téléchargeables, Espace visant à améliorer les fiches conseils, etc. (les « Rubrique(s) »).</p><br>
                                <h6>(i) Contenus Téléchargeables</h6>
                                <p>Nous pouvons être amenés à mettre à votre disposition sur ce Site des contenus que vous êtes autorisés à télécharger (les « Contenus Téléchargeables »). Il s’agit de fiches conseils mises à votre disposition. En téléchargeant ou en utilisant ces Contenus Téléchargeables, vous vous engagez à les utiliser conformément aux présentes Conditions d’Utilisation.
                                Nous vous concédons, pour vos seuls besoins personnels et privés, à titre gracieux et pour la durée légale de protection du droit d’auteur, un droit non exclusif et non transférable d’utilisation du Contenu Téléchargeable. En plus du droit concédé de reproduction à des fins privées et personnelles, il est possible de reproduire et afficher les fiches conseils uniquement dans un cadre pédagogique.</p><br>
                                <h6>(ii) Espace visant à l’amélioration des fiches conseils</h6>
                                <p>Nous pouvons être amenés à mettre à disposition sur ce Site un espace vous permettant de communiquer avec les administrateurs pour permettre des corrections ou améliorations des fiches conseils. (l’« Espace d’amélioration des fiches conseils»).
                                L’Espace d’amélioration des fiches conseils devra être utilisé conformément à la législation en vigueur, aux bonnes mœurs, aux principes énoncés aux présentes et dans le respect des droits d’autrui.</p><br>
                                <h5>4. INFORMATIONS CONTENUES SUR LE SITE</h5>
                                <h6>a. Dispositions générales</h6>
                                <p>Nous nous efforçons de vous délivrer des informations exactes et mises à jour. Toutefois, les transmissions de données et d’informations sur Internet ne bénéficiant que d’une fiabilité technique relative, nous ne pouvons vous garantir l’exactitude de l’ensemble des informations qui figurent sur ce Site.
                                Par ailleurs, nous vous rappelons que des inexactitudes ou omissions peuvent apparaître dans les informations disponibles sur ce Site notamment du fait d’intrusion de tiers. Nous vous invitons à nous signaler toute inexactitude ou omission à l’adresse suivante : adresseDeLaura@outlook.com</p><br>

                                <h5>5. DONNEES A CARACTERE PERSONNEL</h5>
                                <p>Nous pouvons être amenés à collecter des données personnelles vous concernant, notamment lorsque vous (i) vous vous inscrivez sur le Site, (ii) téléchargez un Contenu Téléchargeable, (iii) répondez à un sondage ou à une étude.
                                Ces données à caractère personnel feront l’objet d’un traitement informatique destiné exclusivement à QUELLE SOCIETE ? et pourront être utilisées de la manière suivante :
                                •	Études statistiques : nous compilons et étudions vos données afin de définir votre profil et de mieux adapter nos services à vos attentes. Ces études statistiques sont strictement confidentielles ;
                                •	Suivi de la relation client : si vous nous faites parvenir un message, les données sont conservées et utilisées afin d’apporter une réponse à votre demande et d’en assurer le suivi ;
                                •	Fourniture de services : l’accès à certains espaces tels que l’espace d’amélioration des fiches conseils, etc.
                                Conformément à la Loi « Informatique et Libertés du 6 janvier 1978 modifiée en 2004, vous bénéficiez d’un droit d’accès, d’opposition, de rectification et de suppression des données qui vous concernent. Vous pouvez exercer ce droit à tout moment en adressant un courrier électronique, accompagné d’une photocopie de votre pièce d’identité ou de votre passeport, à l’adresse suivante : ADRESSE LAURA
                                Pour plus d’informations sur le traitement de vos données à caractère personnel, nous vous invitons à consulter notre Politique Données Personnelles accessible ici.</p><br>
                                 
                                <h5>6. MODIFICATION DU SITE ET DES CONDITIONS D’UTILISATION</h5>
                                <p>Nous pouvons être amenés à modifier les contenus et informations inclus dans ce Site ainsi que les présentes Conditions d’Utilisation, notamment afin de respecter toute nouvelle législation et/ou réglementation applicable et/ou afin d’améliorer le Site. Toute modification sera intégrée dans les présentes Conditions d’Utilisation.</p><br>
                                <h5>7. HEBERGEMENT</h5>
                                <p>L’hébergement de ce site est réalisé par l’École Nationale des Vétérinaires de Toulouse, située au 23 Chemin des Capelles, 31300 Toulouse.</p>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
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
        document.getElementById("formulaire").reset();
        document.getElementById("elevage").style.display = "block";
        document.getElementById("veterinaire").style.display = "none";
    } else if (document.getElementById("selectchange").selectedIndex == 1) {
        document.getElementById("formulaire2").reset();
        document.getElementById("elevage").style.display = "none";
        document.getElementById("veterinaire").style.display = "block";
    }
}
</script>