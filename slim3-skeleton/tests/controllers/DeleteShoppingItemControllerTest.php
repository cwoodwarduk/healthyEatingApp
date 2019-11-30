<?php

namespace tests\controllers;

use PHPUnit\Framework\TestCase;
use HealthyEating\controllers\DeleteShoppingItemController;
use HealthyEating\models\ShoppingItemModel;

class DeleteShoppingItemControllerTest extends TestCase
{
    public function testConstruct()
    {
        $shoppingItemModel = $this->createMock(ShoppingItemModel::class);
        $case = new DeleteShoppingItemController($shoppingItemModel);
        $expected = DeleteShoppingItemController::class;
        $this->assertInstanceOf($expected, $case);
    }
}