<?php

namespace HealthyEating\factories;

use HealthyEating\controllers\GetAllShoppingItemsController;
use Psr\Container\ContainerInterface;

class GetAllShoppingItemsControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $shoppingItemModel = $container->get('ShoppingItemModel');
        $renderer = $container->get('renderer');
        return new GetAllShoppingItemsController($renderer, $shoppingItemModel);
    }
}