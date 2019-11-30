<?php

namespace tests\entities;

use HealthyEating\entities\ShoppingItemEntity;

class ShoppingItemEntityTest extends \PHPUnit_Framework_TestCase
{
    private function createShoppingItem()
    {
        return new ShoppingItemEntity(
            6,
            'skimmed milk',
            0,
            0
        );
    }

    public function testGetIdSuccess()
    {
        $item = $this->createShoppingItem();
        $result = $item['shoppingItemName'];
        $this->assertEquals($result, 6);
    }

    public function testGetNameSuccess()
    {
        $item = $this->createShoppingItem();
        $result = $item['shoppingItemName'];
        $this->assertEquals($result, 'skimmed milk');
    }

    public function testGetBoughtSuccess()
    {
        $item = $this->createShoppingItem();
        $result = $item['bought'];
        $this->assertEquals($result, 0);
    }

    public function testGetDeletedSuccess()
    {
        $item = $this->createShoppingItem();
        $result = $item['deleted'];
        $this->assertEquals($result, 0);
    }

}