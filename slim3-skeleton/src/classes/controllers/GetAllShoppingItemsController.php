<?php

namespace HealthyEating\controllers;

use Slim\Views\PhpRenderer;
use HealthyEating\models\ShoppingItemModel;

class GetAllShoppingItemsController
{
    private $renderer;
    private $shoppingItemModel;

    public function __construct(PhpRenderer $renderer, ShoppingItemModel $shoppingItemModel)
    {
        $this->renderer = $renderer;
        $this->shoppingItemModel = $shoppingItemModel;
    }

    public function __invoke($request, $response, $args)
    {
        $args['shoppingItems'] = $this->shoppingItemModel->getAllToDos();
        $this->renderer->render($response, 'index.phtml', $args);
    }
}