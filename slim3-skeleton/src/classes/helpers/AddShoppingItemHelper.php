<?php

namespace HealthyEating\helpers;

class AddShoppingItemsHelper
{
    /**
     * Creates a form to add shopping items
     *
     * @return string containing an html form
     */
    public static function addShoppingItemsForm(){
        $output = "
        <div class=\"add\" id=\"add\">
            <h1>Add Thing To Do</h1>
    
            <form action=\"/shoppingItem\" method=\"post\" >
                <input class='edit' name=\"name\" type=\"text\">
                <input class='button' type=\"submit\" value=\"Add To Do\">
            </form>
        </div>
        ";
        return $output;
    }
}