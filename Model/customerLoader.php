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

    public function getCustomerById($selectedCustomer) : Customer {
        $connect = new Connection();
        $pdo = $connect->Openconnection();

        $handle = $pdo->prepare("SELECT * FROM customer WHERE id='$selectedCustomer'");
        $handle->execute();
        $getCustomerById = $handle->fetch();

        $customer = $getCustomerById;
        $customerById = new Customer($customer['id'], $customer['firstname'], $customer['lastname'], $customer['fixed_discount'], $customer['variable_discount'], $customer['group_id']);;
        return $customerById;
    }
}