<?php

namespace tests\factories;

use PHPUnit\Framework\TestCase;
use HealthyEating\controllers\GetAllShoppingItemsController;
use HealthyEating\factories\GetAllShoppingItemsControllerFactory;
use HealthyEating\models\ShoppingItemModel;
use Psr\Container\ContainerInterface;

class AddShoppingItemControllerFactoryTest extends TestCase
{
    public function testController()
    {
        $container = $this->createMock(ContainerInterface::class);
        $eventModel = $this->createMock(ShoppingItemModel::class);
        $container->method('get')->willReturn($eventModel);
        $factory = new GetAllShoppingItemsControllerFactory();
        $case = $factory($container);
        $expected = GetAllShoppingItemsController::class;
        $this->assertInstanceOf($expected, $case);
    }
}