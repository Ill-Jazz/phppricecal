<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $loaderForCustomers = new CustomerLoader();
        $allCustomers = $loaderForCustomers->getCustomers();

        $loaderForProducts = new ProductLoader();
        $allProducts = $loaderForProducts->getProducts();

        $customerGroups = [];
        if (isset($_POST['product']) && isset ($_POST['customer'])){
           $selectedProduct = $_POST['product'];
           $selectedCustomer = $_POST['customer'];

           //$selectedCustomerGroup = '';

            $loaderForCustomer = new CustomerLoader();
            $getSelectedCustomer = $loaderForCustomer->getCustomerById($selectedCustomer);
            $loaderForCustomerGroups = new Customer_groupsLoader();
            $loaderForCustomerGroups->getCustomerGroups();
            $customerGroups = $loaderForCustomerGroups->getCustomerGroupId($getSelectedCustomer);

            $calculator = new Calculator((int)$selectedCustomer, (int)$selectedProduct);
            $calculator->getPrice();
            var_dump($getProductById['price']);
        }



        //var_dump($groupList);
        //print_r($getSelectedCustomer);



        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        //load the view
        require 'View/homepage.php';
    }
}