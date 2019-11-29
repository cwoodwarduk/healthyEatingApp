<?php

namespace HealthyEating\models;

class ShoppingItemModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllShoppingItems()
    {
        $query = $this->db->prepare('SELECT `id`, `name`, `bought`, `deleted` FROM `shopping_items`;');
        $query->execute();
        $results = $query->fetchAll();
        return $results;
    }
}
