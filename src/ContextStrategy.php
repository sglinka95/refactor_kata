<?php

namespace App;

class ContextStrategy
{
    public static function getUpdateMethod(string $name): QualityStrategy
    {
        switch ($name) {
            case "Aged Brie":
                return new AgedBrieItemStrategy();
                break;
            case "Backstage passes to a TAFKAL80ETC concert":
                return new BackstageItemStrategy();
                break;
            case "Sulfuras, Hand of Ragnaros":
                return new SulfurasItemStrategy();
                break;
            default:
                return new NormalItemStrategy();
                break;
        }
    }
}
