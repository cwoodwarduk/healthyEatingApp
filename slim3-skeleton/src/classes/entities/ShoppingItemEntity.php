<?php

namespace HealthyEating\entities;

use phpDocumentor\Reflection\Types\String_;

class ShoppingItemEntity extends ValidationEntity implements \JsonSerializable
{
    protected $id;
    protected $name;
    protected $bought;
    protected $deleted;

    public function __construct(
        int $shoppingItemId = null,
        string $shoppingItemName = null,
        int $shoppingItemBought = null,
        int $shoppingItemDeleted = null
    )
    {
        $this->id = ($this->id ?? $shoppingItemId);
        $this->name = ($this->name ?? $shoppingItemName);
        $this->bought = ($this->bought ?? $shoppingItemBought);
        $this->deleted = ($this->deleted ?? $shoppingItemDeleted);

        $this->sanitiseData();
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'bought' => $this->bought,
            'deleted' => $this->deleted
        ];
    }

    private function sanitiseData()
    {
        $this->id = (int) $this->id;
        $this->name = self::sanitiseString($this->name);
        $this->bought = (int) $this->bought ? 1 : 0;
        $this->deleted = (int) $this->deleted ? 1 : 0;
    }
}