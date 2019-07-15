<?php

namespace GildedRoseTest;

use PHPUnit\Framework\TestCase;
use GildedRose\GildedRose;

class GildedRoseTestBase extends TestCase
{
    protected function getItem(string $itemName, int $sellIn, int $quality)
    {
        $className = GildedRose::getClassByItemName($itemName);

        $item = new $className($itemName, $sellIn, $quality);

        $app = new GildedRose([$item]);

        $app->updateQuality();

        return $item;
    }
}
