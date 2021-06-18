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

    private int $getProductById;

    public function getProductById($selectedProduct) : object {
        $connect = new Connection();
        $pdo = $connect->Openconnection();

        $handle = $pdo->prepare("SELECT * FROM product WHERE id='$selectedProduct'");
        $handle->execute();
        $getProductById = $handle->fetchAll();
        var_dump($getProductById);
        $product = $getProductById[0];
        $productById = new Product($product['id'], $product['name'], $product['price']);
        return $productById;
    }
}
