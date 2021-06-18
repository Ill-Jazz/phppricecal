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
            array_push($this->customerGroupsArray, $customerGroup);
        }
    }

    public function getCustomerGroupId(Customer $customer) : array
    {
        $groupList = [];

        $group = $this->selectById($this->customerGroupsArray, $customer->getGroupId());
        array_push($groupList, $group);
        while ($group->getParentId() !== null) {
            $group = $this->selectById($this->customerGroupsArray, $group->getParentId());
            array_push($groupList, $group);
        }
        return $groupList;
    }

    function selectById($array, $data) {
        foreach($array as $row) {
            if($row->getId() == $data)
                return $row;
        }
        return NULL;
    }
}

