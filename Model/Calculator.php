<?php


class Calculator
{
    //properties
    private int $chosenCustomer;
    private array $customerGroups = [];
    private int $chosenProduct;
    private int $groupFixedDiscount;
    private int $groupHighestVarDiscount;
    private int $finalPrice;

    //methods
    public function __construct(int $chosenCustomer, array $customerGroups, int $chosenProduct, int $groupFixedDiscount, int $groupHighestVarDiscount, int $finalPrice)
    {
        $this->chosenCustomer = $chosenCustomer;
        $this->customerGroups = $customerGroups;
        $this->chosenProduct = $chosenProduct;
        $this->groupFixedDiscount = $groupFixedDiscount;
        $this->groupHighestVarDiscount = $groupHighestVarDiscount;
        $this->finalPrice = $finalPrice;
    }

    public function getChosenCustomer(): int
    {
        return $this->chosenCustomer;
    }

    public function getFirstName(): array
    {
        return $this->customerGroups;
    }

    public function getChosenProduct(): int
    {
        return $this->chosenProduct;
    }

    public function getGroupFixedDiscount(): int
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
    }
}