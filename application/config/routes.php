<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method


//controller/fonctions = controler/fonction/vue*/



//*controleurs par defaut du site recuperant la classe c_authentification dans controleurs permettant de recharger la page v_authentification*/

$route['inscription'] = 'utilisateurs/inscription';
$route['login'] = 'utilisateurs/login';
$route['logout'] = 'utilisateurs/logout';

$route['contact'] = 'pages/contact';
$route['accueil'] = 'pages/accueil';

$route['bilan'] = 'bilans/view';

$route['suivre'] = 'suivis/elevages_suivis';
$route['suivis'] = 'suivis/veterinaire_suivi';

$route['fiches'] = 'fiches/fiches';
$route['fiches_favoris'] = 'fiches/fiches_favoris';

$route['admin/veterinaires'] = 'utilisateurs/admin_suivi_veterinaires';
$route['admin/veterinaires/(:num)'] = 'utilisateurs/admin_suivi_veterinaires/$1';
$route['admin/elevages'] = 'utilisateurs/admin_suivi_elevages';
$route['admin/elevages/(:num)'] = 'utilisateurs/admin_suivi_elevages/$1';
$route['admin/fiches'] = 'fiches/add_fiche';
$route['admin/commentaires'] = 'fiches/moderation_commentaires';

$route['default_controller'] = 'utilisateurs/profil';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
