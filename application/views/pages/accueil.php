<?php if($this->session->userdata('connecte')) :
echo $this->session->userdata('nom') . ' est connecté'; 
endif?>