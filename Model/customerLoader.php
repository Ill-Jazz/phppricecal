<?php


class CustomerLoader
{
    public function getCustomers()
    {
        $connect = new Connection();
        $pdo = $connect->Openconnection();

        $handle = $pdo->prepare("SELECT * FROM customer ORDER BY id");
        $handle->execute();
        $getCustomer = $handle->fetchAll();

        $customerArray = [];
        foreach ($getCustomer as $customer) {
            $customer = new Customer($customer['id'], $customer['firstname'], $customer['lastname'], $customer['group_id'], $customer['fixed_discount'], $customer['variable_discount']);
            array_push($customerArray, $customer);
        }
        return $customerArray;
    }

    private int $getCustomerById;

    public function getCustomerById($selectedCustomer) : object {
        $connect = new Connection();
        $pdo = $connect->Openconnection();

        $customerSelected = $_POST['customer'];
        $handle = $pdo->prepare("SELECT * FROM customer WHERE id='$customerSelected'");
        $handle->execute();
        $getCustomerById = $handle->fetchAll();
        var_dump($getCustomerById);
        $customer = $getCustomerById;
        $customerById = new Customer($customer['id'], $customer['firstname'], $customer['lastname'], $customer['group_id'], $customer['fixed_discount'], $customer['variable_discount']);;
        return (object)$getCustomerById;
    }

}