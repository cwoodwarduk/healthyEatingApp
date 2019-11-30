<?php

namespace HealthyEating\factories;

use HealthyEating\controllers\DeleteShoppingItemController;
use Psr\Container\ContainerInterface;

class DeleteShoppingItemControllerFactory
{
    /**
     * Creates a controller to delete a shopping item
     *
     * @param ContainerInterface $container
     *
     * @return DeleteShoppingItemController
     */
    public function __invoke(ContainerInterface $container) : DeleteShoppingItemController
    {
        $shoppingItemModel = $container->get('ShoppingItemModel');
        return new DeleteShoppingItemController($shoppingItemModel);
    }
}