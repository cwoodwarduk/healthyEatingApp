<?php

namespace Tests\Factories;

use PHPUnit\Framework\TestCase;
use Slim\Views\PhpRenderer;
use Psr\Container\ContainerInterface;
use HealthyEating\factories\DeleteShoppingItemControllerFactory;
use HealthyEating\models\ShoppingItemModel;
use HealthyEating\controllers\DeleteShoppingItemController;

class DeleteShoppingItemControllerFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $shoppingItemModel = $this->createMock(ShoppingItemModel::class);
        $container->method('post')
            ->willReturn($shoppingItemModel);
        $factory = new DeleteShoppingItemControllerFactory();
        $case = $factory($container);
        $expected = DeleteShoppingItemController::class;
        $this->assertInstanceOf($expected, $case);
    }
}