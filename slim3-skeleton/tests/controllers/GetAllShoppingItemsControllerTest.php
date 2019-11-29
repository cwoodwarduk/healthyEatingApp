<?php

namespace tests\models;

use HealthyEating\models\ShoppingItemModel;
use PHPUnit\Framework\TestCase;
use HealthyEating\controllers\GetAllShoppingItemsController;

class GetAllShoppingItemsControllerTest extends TestCase
{
    public function testConstruct()
    {
        $shoppingItemModel = $this->createMock(ShoppingItemModel::class);
        $case = new GetAllShoppingItemsController($shoppingItemModel);
        $expected = GetAllShoppingItemsController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
