<?php

namespace GildedRose\Items;

class BackstagePass extends StandardItem
{
    /** @var array  */
    private $dayRangeMultiplier = [
        '10' => 2,
        '5' => 3,
    ];

    protected function updateQuality():void
    {
        $this->quality = $this->quality + ($this->qualityStep * $this->getStepMultiplier());

        if ($this->isAfterSale()) {
            $this->setMinQuality();
        } elseif ($this->isReachedMaxQuality()) {
            $this->setMaxQuality();
        }
    }

    protected function getStepMultiplier(): int
    {
        $multiplier = 1;

        foreach ($this->dayRangeMultiplier as $day => $dayMultiplier) {
            if ($this->sell_in <= $day) {
                $multiplier = $dayMultiplier;
            }
        }

        return $multiplier;
    }
}