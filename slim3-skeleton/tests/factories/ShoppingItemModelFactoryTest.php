<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use HealthyEating\factories\ShoppingItemModelFactory;
use HealthyEating\models\ShoppingItemModel;

class ShoppingItemModelFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $db = $this->createMock(\PDO::class);
        $container->method('get')
            ->willReturn($db);
        $factory = new ShoppingItemModelFactory();
        $case = $factory($container);
        $expected = ShoppingItemModel::class;
        $this->assertInstanceOf($expected, $case);
    }
}