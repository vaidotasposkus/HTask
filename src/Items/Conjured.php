<?php

namespace GildedRose\Items;

class Conjured extends StandardItem
{
    /** @var int */
    protected $qualityStep = 2;

    protected function updateQuality(): void
    {
        $this->quality -= $this->qualityStep;

        if ($this->isAfterSale()) {
            $this->quality -= $this->qualityStep;
        }

        if ($this->isReachedMinQuality()) {
            $this->setMinQuality();
        }
    }

}