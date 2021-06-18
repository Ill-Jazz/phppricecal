<?php


class Calculator
{
    //properties
    private int $chosenCustomer;
    private array $customerGroups = [];
    private int $price;
    private int $chosenProduct;
    private int $groupFixedDiscount;
    private int $groupHighestVarDiscount;
    private int $finalPrice;

    public function __construct(int $chosenCustomer, int $chosenProduct)
    {
        $this->chosenCustomer = $chosenCustomer;
        $this->chosenProduct = $chosenProduct;
        /*$this->groupFixedDiscount = $groupFixedDiscount;
        $this->groupHighestVarDiscount = $groupHighestVarDiscount;
        $this->finalPrice = $finalPrice;*/
    }

    public function calculate(){

    }

    public function getPrice(){
        $loaderX = new ProductLoader();
        $chosenProduct = $loaderX->getProducts();
        if(isset($this->chosenProduct)){
            $product = $loaderX->getProductById($_POST['product']);
            $this->price = $product->getPrice();
        }
        //print $_POST['product'];
    }

    /*public function getChosenCustomer(): int
    {
        return $this->chosenCustomer;*/


    public function getChosenCustomerFixedDiscount(): array
    {
        return $this->customerGroups;
    }

    public function getChosenProduct(): int
    {
        return $this->chosenProduct;
    }

    public function getChosenProductPrice() : int {
        return  $this->price;
    }

    /*public function getGroupFixedDiscount(): int
    {
        return $this->groupFixedDiscount;
    }

    public function getGroupHighestVarDiscount(): int
    {
        return $this->groupHighestVarDiscount;
    }

    public function getFinalPrice(): int
    {
        return $this->finalPrice;
    }*/
}