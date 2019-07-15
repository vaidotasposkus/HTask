<?php

namespace GildedRose\Items;

class Sulfuras extends StandardItem
{
    /** @var int */
    const QUALITY = 80;

    /**
     * Sulfuras constructor
     * Update only item quality
     */
    public function __construct(string $itemName, int $sellIn, int $quality)
    {
        $this->quality = self::QUALITY;
        parent::__construct($itemName, $sellIn, $quality);
    }

    public function update():void
    {
    }
}