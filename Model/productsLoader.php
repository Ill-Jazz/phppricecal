<?php


class productsLoader
{
    public function getProducts() {
        $connect = new Connection();
        $pdo = $connect -> Openconnection();

        $handle = $pdo -> prepare("SELECT * FROM product");
        $handle -> execute();
        $products = $handle -> fetchAll();

        $productArray = [];
        foreach ($products as $product) {
            $product = new
}
