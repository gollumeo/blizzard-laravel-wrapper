<?php

namespace Gollumeo\BlizzardApiWrapper\Traits;

use Gollumeo\BlizzardApiWrapper\Misc\ValueObjects\Rankings;

trait HasRank
{
    public function __construct(
        private Rankings $rankings
    ) {}

    public function getRankings(Rankings $rankings): void
    {
        $this->rankings = $rankings;
    }
}