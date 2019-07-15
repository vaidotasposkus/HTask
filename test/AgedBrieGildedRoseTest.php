<?php

namespace GildedRoseTest;

class AgedBrieGildedRoseTest extends GildedRoseTestBase
{
    private $itemName = 'Aged Brie';

    public function testOne()
    {
        $this->assertEquals(1,1);
    }

    public function testUpdateAgedBrieBeforeSellBy()
    {
        $item = $this->getItem($this->itemName, 1, 10);

        $this->assertEquals(0, $item->sell_in);
        $this->assertEquals(11, $item->quality);
    }

    public function testUpdateAgedBrieOnSellBy()
    {
        $item = $this->getItem($this->itemName, 0, 10);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(12, $item->quality);
    }

    public function testUpdateAgedBrieAfterSellBy()
    {
        $item = $this->getItem($this->itemName, -1, 10);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(12, $item->quality);
    }

    public function testUpdateAgedBrieWithMaximumQualityBeforeSellBy()
    {
        $item = $this->getItem($this->itemName, 10, 50);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateAgedBrieWithMaximumQualityOnSellBy()
    {
        $item = $this->getItem($this->itemName, 0, 50);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateAgedBrieWithMaximumQualityAfterSellBy()
    {
        $item = $this->getItem($this->itemName, -1, 50);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateAgedBrieWithAlmostMaximumQualityBeforeSellBy()
    {
        $item = $this->getItem($this->itemName, 10, 49);

        $this->assertEquals(9, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateAgedBrieWithAlmostMaximumQualityOnSellBy()
    {
        $item = $this->getItem($this->itemName, 0, 49);

        $this->assertEquals(-1, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }

    public function testUpdateAgedBrieWithAlmostMaximumQualityAfterSellBy()
    {
        $item = $this->getItem($this->itemName, -1, 49);

        $this->assertEquals(-2, $item->sell_in);
        $this->assertEquals(50, $item->quality);
    }
}
