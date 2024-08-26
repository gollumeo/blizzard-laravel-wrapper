<?php

namespace Gollumeo\BlizzardApiWrapper\Misc\ValueObjects;

readonly class Rankings
{
    public function __construct(
        private Rank $worldRank,
        private Rank $regionRank,
        private Rank $realmRank
    ) {}

    public function getWorldRank(): Rank
    {
        return $this->worldRank;
    }

    public function getRegionRank(): Rank
    {
        return $this->regionRank;
    }

    public function getRealmRank(): Rank
    {
        return $this->realmRank;
    }
}