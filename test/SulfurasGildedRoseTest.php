<?php

namespace GildedRoseTest;

class SulfurasGildedRoseTest extends GildedRoseTestBase
{
    private $itemName = 'Sulfuras, Hand of Ragnaros';

    public function testUpdateSulfurasBeforeSellBy()
    {
        $item = $this->getItem($this->itemName, 1, 80);

        $this->assertEquals(1, $item->sell_in);
        $this->assertEquals(80, $item->quality);
    }

    public function testUpdateSulfurasOnSellBy()
    {
        $item = $this->getItem($this->itemName, 0, 80);

        $this->assertEquals(0, $item->sell_in);
        $this->assertEquals(80, $item->quality);
    }

    public function testUpdateSulfurasAfterSellBy()
    {
        $item = $this->getItem($this->itemName, -1, 80);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(80, $item->quality);
    }
}
