<?php

namespace HealthyEating\controllers;

use http\Env\Response;
use HealthyEating\models\ShoppingItemModel;

class DeleteShoppingItemController
{
    /**
     * @var containing a ShoppingItemModel
     */
    private $shoppingItemModel;

    /**
     * DeleteShoppingItemController constructor. Populates shoppingItemModel with a new ShoppingItemModel
     *
     * @param ShoppingItemModel $shoppingItemModel
     */
    public function __construct(ShoppingItemModel $shoppingItemModel)
    {
        $this->shoppingItemModel = $shoppingItemModel;
    }

    /**
     * Gets user data and adds new shopping item to the database
     *
     * @param $request the http request
     *
     * @param $response the http response
     *
     * @param $args an array
     *
     * @return a redirect back to index.phtml if successful, a json response if fails
     */
    public function __invoke($request, $response, $args)
    {
        $id = $request->getParam('id');
        $result = $this->shoppingItemModel->deleteShoppingItem($id);
        if($result){
            return $response->withRedirect('/shoppingItem');
        } else {
            return $response->withJson(["success" => "false", 200]);
        }
    }
}
