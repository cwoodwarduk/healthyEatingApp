<?php

namespace tests\factories;

use PHPUnit\Framework\TestCase;
use HealthyEating\controllers\GetAllShoppingItemsController;
use HealthyEating\factories\GetAllShoppingItemsControllerFactory;
use HealthyEating\models\ShoppingItemModel;
use Psr\Container\ContainerInterface;

class GetAllShoppingItemsControllerFactoryTest extends TestCase
{
    public function testController()
    {
        $container = $this->createMock(ContainerInterface::class);
        $shoppingItemModel = $this->createMock(ShoppingItemModel::class);
        $container->method('get')->willReturn($shoppingItemModel);
        $factory = new GetAllShoppingItemsControllerFactory();
        $case = $factory($container);
        $expected = GetAllShoppingItemsController::class;
        $this->assertInstanceOf($expected, $case);
    }
}