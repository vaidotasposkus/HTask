<?php

namespace GildedRose\Items;

class AgedBrie extends StandardItem
{
    protected function updateQuality():void
    {
        $this->quality += $this->qualityStep;

        if ($this->isAfterSale()) {
            $this->quality += $this->qualityStep;
        }

        if ($this->isReachedMaxQuality()) {
            $this->setMaxQuality();
        }
    }
}