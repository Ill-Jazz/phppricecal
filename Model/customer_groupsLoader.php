<?php


class Customer_groupsLoader
{

    private array  $customerGroupsArray = [];

    public function getCustomerGroups() {
        $connect = new Connection();
        $pdo = $connect->Openconnection();

        $handle = $pdo->prepare("SELECT * FROM customer_group ORDER BY id");
        $handle->execute();
        $getCustomerGroups = $handle->fetchAll();

        foreach ($getCustomerGroups as $customerGroup){
            $customerGroup = new Customer_group($customerGroup['id'], $customerGroup['name'], $customerGroup['parent_id'], $customerGroup['fixed_discount'], $customerGroup['variable_discount']);
            $this->customerGroupsArray[$customerGroup->getId()] = $customerGroup;
        }
    }

    public function getCustomerGroupId(Customer $customer) : array
    {
        $groupList = [];
        $group = $this->customerGroupsArray[$customer->getGroupId()];
        array_push($groupList, $group);
        while ($group->getParentId() !== null) {
            $group = $this->customerGroupsArray[$group->getParentId()];
            array_push($groupList, $group);
        }
        var_dump($groupList);
        return $groupList;
    }
}

