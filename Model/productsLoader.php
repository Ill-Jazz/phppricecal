<?php


class ProductLoader
{
    public function getProducts()
    {
        $connect = new Connection();
        $pdo = $connect->Openconnection();

        $handle = $pdo->prepare("SELECT * FROM product");
        $handle->execute();
        $getProducts = $handle->fetchAll();

        $productArray = [];
        foreach ($getProducts as $product) {
            $product = new Product($product['id'], $product['name'], $product['price']);
            array_push($productArray, $product);
        }
        return $productArray;
    }
}
