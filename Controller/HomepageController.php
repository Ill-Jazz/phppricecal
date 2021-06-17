<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //this is just example code, you can remove the line below
        /*$pdo = Connection::openConnection();
        $handle = $pdo->prepare('SELECT * FROM customer WHERE firstname = "buddy"');
        $handle->execute();
        $handle->fetchAll();*/

        $loaderForProducts = new ProductLoader();
        $allProducts = $loaderForProducts->getProducts();

        $loaderForCustomers = new CustomerLoader();
        $allCustomers = $loaderForCustomers->getCustomers();

        $loaderForCustomer = new CustomerLoader();
        $getSelectedCustomer = $loaderForCustomer->getCustomerById(1);


        if (isset($_POST['product']) && isset ($_POST['customer'])){
           //$selectedProduct = $_POST['product'];
           //$selectedCustomer = $_POST['customer'];
           //var_dump($_POST);
           //$selectedCustomerGroup = '';
           /*$loaderForCustomerGroups = new Customer_groupsLoader();
           $customerGroups = $loaderForCustomerGroups->getCustomerGroupId($getSelectedCustomer);*/
        }



        //var_dump($groupList);
        print_r($getSelectedCustomer);
        /*$calculator = new Calculator($selectedProduct, );*/

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        //load the view
        require 'View/homepage.php';
    }
}