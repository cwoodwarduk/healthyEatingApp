<?php


namespace HealthyEating\helpers;

use HealthyEating\entities\ToDoEntity;

class DisplayToDoHelper
{
    public static function displayToDos($data){
        $output = '';
        foreach ($data as $shoppingItem){
            $id = $shoppingItem['id'];
            $name = $shoppingItem['name'];
            $completed = $shoppingItem['completed'];
            $deleted = $shoppingItem['deleted'];
            if ($completed == 0 && $deleted == 0){
                $output .="<div class='shoppingItem'>
                            <h2>No." . $id . ": " . $name . "</h2>
                            </div>";
            }
        }
        return $output;
    }
}