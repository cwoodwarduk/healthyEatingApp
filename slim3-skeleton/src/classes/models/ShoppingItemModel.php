<?php

namespace HealthyEating\models;

class ShoppingItemModel
{
    /**
     * @var $db a database connection
     */
    private $db;

    /**
     * ShoppingItemModel constructor.
     *
     * @param $db a database connection.
     *
     * @return a populated $db property
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Get all shopping items from the database
     *
     * @return an array of shopping items
     */
    public function getAllShoppingItems()
    {
        $query = $this->db->prepare('SELECT `id`, `name`, `bought`, `deleted` FROM `shopping_items`;');
        $query->execute();
        $results = $query->fetchAll();
        return $results;
    }
}
