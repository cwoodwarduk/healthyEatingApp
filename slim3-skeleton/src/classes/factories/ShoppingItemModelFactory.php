<?php
namespace HealthyEating\factories;

use HealthyEating\models\ShoppingItemModel;
use Psr\Container\ContainerInterface;

class ShoppingItemModelFactory
{
    /**
     * Factory to generate a ShoppingItemModel
     *
     * @param ContainerInterface $container
     *
     * @return ShoppingItemModel
     */
    public function __invoke(ContainerInterface $container) : ShoppingItemModel
    {
        $db = $container->get('dbConnection');
        return new ShoppingItemModel($db);
    }
}