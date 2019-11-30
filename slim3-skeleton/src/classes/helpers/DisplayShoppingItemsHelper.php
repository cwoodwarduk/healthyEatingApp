<?php

namespace HealthyEating\helpers;

use HealthyEating\entities\ShoppingItemEntity;

class DisplayShoppingItemsHelper
{
    /**
     * Displays shopping items with a delete button next to each
     *
     * @param $data shopping items the user has saved
     *
     * @return string of html to display only those items that haven't been marked as bought or deleted.
     */
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
                            <form action='/delete' method='post'>
                                <input name='id' value='" . $id . "' type='hidden'>
                                <input class='button' type='submit' name='delete' value='delete'>
                            </form>
                            </div>";
            }
        }
        return $output;
    }
}