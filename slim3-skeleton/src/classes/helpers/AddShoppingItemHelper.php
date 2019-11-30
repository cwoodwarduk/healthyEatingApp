<?php

namespace HealthyEating\helpers;

class AddShoppingItemHelper
{
    /**
     * Creates a form to add shopping items
     *
     * @return string containing an html form
     */
    public static function addShoppingItemsForm(){
        $output = "
            <form action=\"/shoppingItem\" method=\"post\" >
                <input class='edit' name=\"name\" type=\"text\">
                <input class='button' type=\"submit\" value=\"Add To Do\">
            </form>
        ";
        return $output;
    }
}