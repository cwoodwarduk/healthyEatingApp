<?php

namespace tests\models;
use PHPUnit\Framework\TestCase;
use HealthyEating\models\ShoppingItemModel;

class EventModelTest extends TestCase
{
    public function testConstruct()
    {
        $db = $this->createMock(\PDO::class);
        $case = new ShoppingItemModel($db);
        $expected = ShoppingItemModel::class;
        $this->assertInstanceOf($expected, $case);
    }
}