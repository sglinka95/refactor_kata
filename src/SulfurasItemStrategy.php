<?php

namespace App;

class SulfurasItemStrategy implements QualityStrategy
{
    public function update(Item $item): Item
    {
        return $item;
    }
}
