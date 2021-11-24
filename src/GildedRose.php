<?php

namespace App;

final class GildedRose
{
    public function updateQuality($item)
    {
        $context = ContextStrategy::getUpdateMethod($item->name);
        $item = $context->update($item);
    }
}
