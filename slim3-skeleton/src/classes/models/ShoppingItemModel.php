<?php

namespace HealthyEating\models;

use PDO;

class ShoppingItemModel
{
    /**
     * @var $db a database connection
     */
    private $db;

    /**
     * ShoppingItemModel constructor.
     *
     * @param PDO $db a database connection.
     *
     * @return a populated $db property
     */
    public function __construct(PDO $db)
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

    /**
     * Insert a new item into the database
     *
     * @param $name the name of the new shopping item
     *
     * @return boolean if query successful
     */
    public function addShoppingItem($name)
    {
        $query = $this->db->prepare('INSERT INTO `shopping_items` (`name`, `bought`, `deleted`) VALUES (:name, 0, 0);');
        $query->bindParam(':name', $name);
        return $query->execute();
    }

    /**
     * Change the deleted flag of an item in the db to be marked as deleted
     *
     * @param $id the id of the shopping item to be marked as deleted
     *
     * @return boolean if query is successful
     */
    public function deleteShoppingItem($id)
    {
        $query = $this->db->prepare('UPDATE `shopping_items` SET `deleted` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
