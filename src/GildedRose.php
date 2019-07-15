<?php

namespace GildedRose;

class GildedRose
{
    /** @var array */
    private $items = [];

    /** @var array */
    protected static $itemClassMap = [
        'Aged Brie' => Items\AgedBrie::class,
        'Sulfuras, Hand of Ragnaros' => Items\Sulfuras::class,
        'Backstage passes to a TAFKAL80ETC concert' => Items\BackstagePass::class,
        'Conjured Mana Cake' => Items\Conjured::class
    ];

    /**
     * GildedRose constructor.
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Update Item quality
     */
    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $item->update();
        }
    }

    /**
     * Load item class by his name
     */
    public static function getClassByItemName(string $itemName): string
    {
        $class = Items\StandardItem::class;

        if (isset(static::$itemClassMap[$itemName])) {
            $class = static::$itemClassMap[$itemName];
        }

        return $class;
    }
}

