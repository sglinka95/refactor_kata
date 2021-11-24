<?php

namespace App;

interface QualityStrategy
{
    public function update(Item $item): Item;
}
