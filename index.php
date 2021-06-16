<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Model/connection.php';
require 'Model/customer.php';
require 'Model/customer_groups.php';
require 'Model/products.php';
require 'Model/productsLoader.php';
require 'Model/customerLoader.php';


require 'Controller/HomepageController.php';
$controller = new HomepageController();
$controller->render($_GET, $_POST);

















//include all your model files here

//include all your controllers here
/*require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}

require 'Model/connection.php';*/



