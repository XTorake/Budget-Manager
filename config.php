<?php
// HERE YOU WILL FIND ALL OF THE BASE CONFIGURATION SETTINGS FOR EL LUGAR COCKPIT



// APPLICATION INFORMATION
define('APP_DISPLAY_NAME', 'Framework');
define('APP_NAME', 'framework'); // IMPPORTANT dont use whitespaces nor special characters.
define('APP_VERSION', '1.0.0');
define('APP_DESCRIPTION', 'Panel for the investors and Admins to check their information on the El Lugar Resort.');



// PATH SETTINGS
define('VIEW', 'view/');
define('CONTROLLER', 'controller/');
define('MODEL', 'model/');



// VIEW FOLDERS
define('COMPONENTS', VIEW.'components/');
define('ASSETS', VIEW.'assets/');
define('IMAGES', ASSETS.'images/');
define('CSS', ASSETS.'css/');
define('JS', ASSETS.'js/');



// GLOBAL VIEWS
define('LOGIN', 'login.php');
define('NOT_FOUND', '404.php');



// PAGES
define('PAGES', VIEW.'pages/');
define('PAGES_VAR', 'p');
define('PAGES_DEFAULT', 'main');
define('PAGES_INIT', PAGES.'init.php');



// ADMIN PAGES & Settings
define('ADMIN', VIEW.'admin/');
define('ADMIN_VAR', 'adm');
define('ADMIN_DEFAULT', 'main');
define('ADMIN_INIT', ADMIN.'init.php');
define('NO_ACCESS', 'noaccess');


//Enter & Exit Admin view
define('ADMIN_VIEW', APP_NAME.'_ADMIN_VIEW_ACCESS');
define('EXIT_ADMIN', 'exit_'.ADMIN_VIEW);



// SESSION VARIABLES
define('SESSION_VAR', APP_NAME.'_SESSION');
define('SESSION_ADMIN', APP_NAME.'_ADMIN');
define('IS_ADMIN', 'is_admin');



// API SETTINGS
define('API_VERSION', 'V1');
define('API_PATH', 'API/'.API_VERSION.'/');



?>
