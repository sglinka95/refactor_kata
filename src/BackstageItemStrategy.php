<?php

namespace App;

class BackstageItemStrategy implements QualityStrategy
{
    public function update(Item $item): Item
    {
        $item->sell_in -= 1;

        if ($item->sell_in < 0) {
            $item->quality = 0;
            return $item;
        }

        $item->quality += 1;

        if ($item->sell_in < 10) {
            $item->quality += 1;
        }

        if ($item->sell_in < 5) {
            $item->quality += 1;
        }

        if ($item->quality > 50) {
            $item->quality = 50;
        }

        return $item;
    }
}
