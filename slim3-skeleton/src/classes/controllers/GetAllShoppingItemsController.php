<?php

namespace HealthyEating\controllers;

use Slim\Views\PhpRenderer;
use HealthyEating\models\ShoppingItemModel;

class GetAllShoppingItemsController
{
    /**
     * @var PhpRenderer as populated by the constructor function
     */
    private $renderer;

    /**
     * @var ShoppingItemModel as populated by the constructor function
     */
    private $shoppingItemModel;

    /**
     * GetAllShoppingItemsController constructor.
     *
     * Populates the renderer and shoppingItemModel properties
     *
     * @param PhpRenderer $renderer
     *
     * @param ShoppingItemModel $shoppingItemModel
     */
    public function __construct(PhpRenderer $renderer, ShoppingItemModel $shoppingItemModel)
    {
        $this->renderer = $renderer;
        $this->shoppingItemModel = $shoppingItemModel;
    }

    /**
     * @param $request
     * @param $response
     * @param $args
     */
    public function __invoke($request, $response, $args)
    {
        $args['shoppingItems'] = $this->shoppingItemModel->getAllToDos();
        $this->renderer->render($response, 'index.phtml', $args);
    }
}