<?php


class Customer_group
{
    private int $id;
    private string $name;
    private int|null $parentId;
    private int|null $fixedDiscount;
    private int|null $variableDiscount;

    public function __construct(int $id, string $name, int|null $parentId, int|null $fixedDiscount, int|null $variableDiscount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getParentId(): int|null
    {
        return $this->parentId;
    }

    public function getFixedDiscount(): int|null
    {
        return $this->fixedDiscount;
    }

    public function getVariableDiscount(): int|null
    {
        return $this->variableDiscount;
    }

}