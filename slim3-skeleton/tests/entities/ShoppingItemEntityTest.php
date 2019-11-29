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
        $applicant = $this->createShoppingItem();
        $result = $applicant->getId();
        $this->assertEquals($result, 1);
    }

    public function testGetNameSuccess()
    {
        $applicant = $this->createApplicant();
        $result = $applicant->getName();
        $this->assertEquals($result, 'james');
    }
}