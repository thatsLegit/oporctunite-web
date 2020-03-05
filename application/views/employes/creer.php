<?php
echo validation_errors();

echo form_open('employes/recherche');
?>
<!---
<label for="matricule">Matricule :</label>
<input type="text" name="matricule" value=""><br>-->
<label for="nom">Nom :</label>
<input type="text" name="nom" value=""><br>
<label for="prenom">Prenom : </label>
<input type="text" name="prenom" value=""><br>

<input type="submit" name="submit" value="Chercher un employe">
</form>