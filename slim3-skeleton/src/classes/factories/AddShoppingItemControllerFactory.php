<?php

namespace HealthyEating\factories;

use HealthyEating\controllers\AddShoppingItemController;
use Psr\Container\ContainerInterface;

class AddShoppingItemControllerFactory
{
    /**
     * Creates a controller to add a shopping item
     *
     * @param ContainerInterface $container
     *
     * @return AddShoppingItemController
     */
    public function __invoke(ContainerInterface $container) : AddShoppingItemController
    {
        $shoppingItemModel = $container->get('ShoppingItemModel');
        return new AddShoppingItemController($shoppingItemModel);
    }
}