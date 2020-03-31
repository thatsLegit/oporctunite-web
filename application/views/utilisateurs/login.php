<style>
    #titre{
        margin-top: 150px;
    }

    #inscription{
        color: white;
    }

</style>

<div id="titre">
    <h3 class="text-center mt-5">O'porctunité</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="form mt-5">

                <?php echo validation_errors();
                echo form_open('utilisateurs/login', array('id' => 'formulaireConnexion'));?>       

                    <div class="form-group">
                        <select class="custom-select mb-3" name="select" id="select">
                            <option value="" hidden>Statut</option>
                            <option value="elevage">Eleveur</option>
                            <option value="veterinaire">Veterinaire</option>
                            <option value="admin">Autre</option>
                        </select>
                        <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez selectionner une catégorie.</span>
                    </div>

                    <div class="form-group">
                        <input type="text" name="login" id="login" class="form-control" placeholder="Email ou téléphone"/>
                        <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un identifiant de connexion.</span>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe"/>
                        <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un mot de passe.</span>
                    </div>

                    <!-- FORGOT PWD -->
                    <div class="mt-2 mb-4"><a href="utilisateurs/forgotten" class="text-center">Mot de passe oublié ?</a></div>


                    <div class="col-md-12 text-center ">
                        <input type="submit" class=" btn btn-block mybtn btn-success" value="Connexion">               
                    </div>

                </form>

                <div class="mt-2 mb-4 text-center"><a href="<?php echo base_url(); ?>inscription" id="inscription" class="text-center">Pas encore de compte?</a></div>
                
            </div>
        </div>
   </div>
</div>

<script>
function deactivateTooltips() {  
    var spans = document.getElementById("formulaireConnexion").querySelectorAll('span');  
    for (var i = 0 ; i < spans.length ; i++) {
        spans[i].className = 'd-none';
    }  
} 

function getTooltip(elements) {
    while (elements = elements.nextSibling) {
        if (elements.tagName == 'SPAN') {
            return elements;
        }
    }      
    return false; 
}

var check = {};

check['login'] = function(id) {
    var login = document.getElementById(id),
        tooltipStyle = getTooltip(login);
        
    if (/[0-9]{10}/.test(login.value) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(login.value)) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

check['password'] = function(id) {
    var password = document.getElementById(id),
        tooltipStyle = getTooltip(password);

    if (password.value.length >= 1) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

check['select'] = function(id) {
    var select = document.getElementById(id),
        selected = select.options[select.selectedIndex].value,
        tooltipStyle = getTooltip(select);

    if (selected == "veterinaire" || selected == "elevage" || selected == "admin") {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

(function() {

    var formulaire = document.getElementById('formulaireConnexion'),
    inputs = document.getElementById("formulaireConnexion").querySelectorAll('input');
    //onkeyup
    for (var i = 0 ; i < 2 ; i++) {
        inputs[i].addEventListener('keyup', function(e) {
            check[e.target.id](e.target.id);
        }, false);
    }
    //onsubmit
    formulaire.addEventListener('submit', function(e) {   
        var result = true;
        for (var i in check) {
            result = check[i](i) && result;
        }
        if (!result) {
            e.preventDefault();
        }      
    }, false);

})();

deactivateTooltips(); 

</script>