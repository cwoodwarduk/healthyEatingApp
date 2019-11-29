<?php

namespace tests\controllers;

use PHPUnit\Framework\TestCase;
use HealthyEating\controllers\AddShoppingItemController;
use HealthyEating\models\ShoppingItemModel;

class AddShoppingItemControllerTest extends TestCase
{
    public function testConstruct()
    {
        $eventModel = $this->createMock(ShoppingItemModel::class);
        $case = new AddShoppingItemController($eventModel);
        $expected = AddShoppingItemController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
