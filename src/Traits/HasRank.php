<?php

namespace Gollumeo\BlizzardApiWrapper\Traits;

use Gollumeo\BlizzardApiWrapper\Misc\ValueObjects\Rank;

trait HasRank
{
    protected Rank $worldRank;
    protected Rank $regionRank;
    protected Rank $realmRank;

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

    public function setWorldRank(Rank $worldRank): void
    {
        $this->worldRank = $worldRank;
    }

    public function setRegionRank(Rank $regionRank): void
    {
        $this->regionRank = $regionRank;
    }

    public function setRealmRank(Rank $realmRank): void
    {
        $this->realmRank = $realmRank;
    }
}