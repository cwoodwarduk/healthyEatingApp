<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/shoppingItem', 'GetAllShoppingItemsController');
    $app->post('/shoppingItem', 'AddShoppingItemController');
    $app->post('/deleteItem', 'DeleteShoppingItemController');
};
