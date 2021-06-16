<?php
declare(strict_types=1);

class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private int|null $fixedDiscount;
    private int|null $variableDiscount;
    private int|null $groupId;
    private Customer_groups $customer_groups;

    public function __construct(int $id, string $firstName, string $lastName, int|null $fixedDiscount, int|null $variableDiscount, int|null $groupId)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
        $this->groupId = $groupId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getFixedDiscount(): null|int
    {
        return $this->fixedDiscount;
    }

    public function getVariableDiscount(): null|int
    {
        return $this->variableDiscount;
    }

    public function getGroupId(): int|null
    {
        return $this->groupId;
    }

    /*public function totalFixedDiscount(){

    }
    }*/

}
