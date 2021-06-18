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

    //private $getProductById;

    public function getProductById(int $selectedProduct) : object {
        $connect = new Connection();
        $pdo = $connect->Openconnection();

        $handle = $pdo->prepare("SELECT * FROM product WHERE id='$selectedProduct'");
        $handle->execute();
        $getProductInfo = $handle->fetch();

        $product = $getProductInfo;
        $productById = new Product($product['id'], $product['name'], $product['price']);
        return  $productById;
    }
}
