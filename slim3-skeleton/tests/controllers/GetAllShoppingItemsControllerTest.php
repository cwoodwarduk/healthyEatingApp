<?php

namespace tests\models;

use HealthyEating\models\ShoppingItemModel;
use PHPUnit\Framework\TestCase;
use HealthyEating\controllers\GetAllShoppingItemsController;

class GetAllShoppingItemsControllerTest extends TestCase
{
    public function testConstruct()
    {
        $mockRender = $this->createMock(PhpRenderer::class);
        $mockModel = $this->createMock(ShoppingItemModel::class);
        $case = new GetAllShoppingItemsController($mockRender, $mockModel);
        $expected = GetAllShoppingItemsController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
