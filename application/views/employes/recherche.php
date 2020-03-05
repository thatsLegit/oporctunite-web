<?php
echo validation_errors();

echo form_open('employes/recherche');
?>

<label for="nom">Nom</label>
<input type="text" name="nom" value=""><br>
<input type="submit" name="submit" value="Chercher un employe">
</form>