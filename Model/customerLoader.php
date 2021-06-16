<?php


class CustomerLoader
{
    public function getCustomers()
    {
        $connect = new Connection();
        $pdo = $connect->Openconnection();

        $handle = $pdo->prepare("SELECT * FROM customer");
        $handle->execute();
        $getCustomer = $handle->fetchAll();

        $customerArray = [];
        foreach ($getCustomer as $customer) {
            $customer = new Customer($customer['id'], $customer['firstname'], $customer['lastname'], $customer['group_id'], $customer['fixed_discount'], $customer['variable_discount']);
            array_push($customerArray, $customer);
        }
        return $customerArray;
    }
}