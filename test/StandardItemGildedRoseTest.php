<?php

namespace GildedRoseTest;

class StandardItemGildedRoseTest extends GildedRoseTestBase
{
    private $itemName = '+5 Dexterity Vest';

    public function testUpdateStandardBeforeSellBy()
    {
        $item = $this->getItem($this->itemName, 1, 10);

        $this->assertEquals(0, $item->sell_in);
        $this->assertEquals(9, $item->quality);
    }

    public function testUpdateStandardOnSellBy()
    {
        $item = $this->getItem($this->itemName, 0, 10);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(8, $item->quality);
    }

    public function testUpdateStandardAfterSellBy()
    {
        $item = $this->getItem($this->itemName, -1, 10);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(8, $item->quality);
    }

    public function testUpdateStandardWithZeroQuality()
    {
        $item = $this->getItem($this->itemName, 10, 0);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(0, $item->quality);
    }
}
