<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<?php 
class c_contacts extends CI_Controller{
	public function view(){
		$this->load->view('header_elevage');
		$this->load->view('contacts');
		
	}
}