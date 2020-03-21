<h2><?= $titre ?></h2>

<?php if($this->session->userdata('connecte')) :
echo $this->session->userdata('nom') . ' est connecté'; 
endif?>