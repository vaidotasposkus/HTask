<?php

namespace GildedRoseTest;

class ConjuredGildedRoseTest extends GildedRoseTestBase
{
    private $itemName = 'Conjured Mana Cake';

    public function testUpdateConjuredBeforeSellBy()
    {
        $item = $this->getItem($this->itemName, 1, 10);

        $this->assertEquals(0, $item->sell_in);
        $this->assertEquals(8, $item->quality);
    }

    public function testUpdateConjuredOnSellBy()
    {
        $item = $this->getItem($this->itemName, 0, 10);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(6, $item->quality);
    }

    public function testUpdateConjuredAfterSellBy()
    {
        $item = $this->getItem($this->itemName, -1, 10);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(6, $item->quality);
    }

    public function testUpdateConjuredWithZeroQuality()
    {
        $item = $this->getItem($this->itemName, 10, 0);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(0, $item->quality);
    }
}
