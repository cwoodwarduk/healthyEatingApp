<?php

namespace Tests\Factories;

use PHPUnit\Framework\TestCase;
use Slim\Views\PhpRenderer;
use Psr\Container\ContainerInterface;
use HealthyEating\factories\AddShoppingItemControllerFactory;
use HealthyEating\models\ShoppingItemModel;
use HealthyEating\controllers\AddShoppingItemController;

class AddShoppingItemControllerFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $shoppingItemModel = $this->createMock(ShoppingItemModel::class);
        $container->method('post')
            ->willReturn($shoppingItemModel);
        $factory = new AddShoppingItemControllerFactory();
        $case = $factory($container);
        $expected = AddShoppingItemController::class;
        $this->assertInstanceOf($expected, $case);
    }
}