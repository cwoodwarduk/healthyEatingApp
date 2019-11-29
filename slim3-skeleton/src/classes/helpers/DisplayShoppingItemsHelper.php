<?php


namespace HealthyEating\helpers;

use HealthyEating\entities\ShoppingItemEntity;

class DisplayShoppingItemsHelper
{
    public static function displayShoppingItems($data){
        $output = '';
        foreach ($data as $shoppingItem){
            $id = $shoppingItem['id'];
            $name = $shoppingItem['name'];
            $bought = $shoppingItem['bought'];
            $deleted = $shoppingItem['deleted'];
            if ($bought == 0 && $deleted == 0){
                $output .="<div class='shoppingItem'>
                            <h2>No." . $id . ": " . $name . "</h2>
                            </div>";
            }
        }
        return $output;
    }
}