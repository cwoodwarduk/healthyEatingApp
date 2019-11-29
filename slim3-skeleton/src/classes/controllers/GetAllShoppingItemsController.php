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
     * @param $renderer the PhpRenderer
     *
     * @param $shoppingItemModel a ShoppingItemModel
     *
     * @return populated renderer and shoppingItemModel properties
     */
    public function __construct(PhpRenderer $renderer, ShoppingItemModel $shoppingItemModel)
    {
        $this->renderer = $renderer;
        $this->shoppingItemModel = $shoppingItemModel;
    }

    /**
     * @param $request the http request
     *
     * @param $response the http response
     *
     * @param $args an array of arguments
     *
     * @return renders the
     */
    public function __invoke($request, $response, $args)
    {
        $args['shoppingItems'] = $this->shoppingItemModel->getAllShoppingItems();
        $this->renderer->render($response, 'index.phtml', $args);
    }
}