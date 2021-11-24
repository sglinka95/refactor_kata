<?php

namespace App;

class AgedBrieItemStrategy implements QualityStrategy
{
    public function update(Item $item): Item
    {
        $item->sell_in -= 1;
        $item->quality += 1;

        if ($item->sell_in <= 0) {
            $item->quality += 1;
        }

        if ($item->quality > 50) {
            $item->quality = 50;
        }

        return $item;
    }
}
