<?php

namespace GildedRose\Items;

use GildedRose\Item;

class StandardItem extends Item
{
    /** @var int */
    protected $maxQuality = 50;

    /** @var int */
    protected $minQuality = 0;

    /** @var int */
    protected $qualityStep = 1;

    public function update():void
    {
        $this->updateQuality();
        $this->updateSellIn();
    }

    protected function updateQuality():void
    {
        if ($this->sell_in > $this->minQuality) {
            $this->quality -= 1;
        } else {
            $this->quality -= 2;
        }

        if ($this->isReachedMinQuality()) {
            $this->setMinQuality();
        }
    }

    protected function updateSellIn():void
    {
        $this->sell_in--;
    }

    protected function setMaxQuality():void
    {
        $this->quality = $this->maxQuality;
    }

    /**
     * Set Minimum Item Quality
     */
    protected function setMinQuality():void
    {
        $this->quality = $this->minQuality;
    }

    /**
     * Check Is Item Reached Minimum Quality
     */
    protected function isReachedMinQuality():bool
    {
        return $this->quality < $this->minQuality;
    }

    /**
     * Check Is Item Reached Maximum Quality
     */
    protected function isReachedMaxQuality():bool
    {
        return $this->quality > $this->maxQuality;
    }

    public function isAfterSale(): bool
    {
        return $this->sell_in <= 0;
    }
}