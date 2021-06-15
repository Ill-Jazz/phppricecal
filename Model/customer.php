<?php
declare(strict_types=1);

class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $fixedDiscount;
    private int $variableDiscount;
    private int $groupId;

    public function __construct(int $id, string $firstName, string $lastName, int $fixedDiscount, int $variableDiscount, int $groupId)
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

    public function getfirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getFixedDiscount(): int
    {
        return $this->fixedDiscount;
    }

    public function getVariableDiscount(): int
    {
        return $this->variableDiscount;
    }

    public function getGroupId(): int
    {
        return $this->groupId;
    }

}
