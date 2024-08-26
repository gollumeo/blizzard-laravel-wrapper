<?php

namespace Gollumeo\BlizzardApiWrapper\Character\Entities;

use Gollumeo\BlizzardApiWrapper\Character\ValueObjects\CharacterClass;
use Gollumeo\BlizzardApiWrapper\Character\ValueObjects\CharacterId;
use Gollumeo\BlizzardApiWrapper\Character\ValueObjects\CharacterItemLevel;
use Gollumeo\BlizzardApiWrapper\Character\ValueObjects\CharacterLevel;
use Gollumeo\BlizzardApiWrapper\Character\ValueObjects\CharacterMythicPlusRating;
use Gollumeo\BlizzardApiWrapper\Character\ValueObjects\CharacterName;
use Gollumeo\BlizzardApiWrapper\Character\ValueObjects\CharacterRace;
use Gollumeo\BlizzardApiWrapper\Character\ValueObjects\CharacterRealm;
use Gollumeo\BlizzardApiWrapper\Misc\ValueObjects\Rank;
use Gollumeo\BlizzardApiWrapper\Traits\HasRank;

class Character
{
    use HasRank;

    protected Rank $realmRank;
    protected Rank $regionRank;
    protected Rank $worldRank;

    public function __construct(
        private readonly CharacterId               $id,
        private readonly CharacterClass            $class,
        private readonly CharacterItemLevel        $itemLevel,
        private readonly CharacterLevel            $level,
        private readonly CharacterMythicPlusRating $mythicPlusRating,
        private readonly CharacterName             $name,
        private readonly CharacterRace             $race,
        private readonly CharacterRealm            $realm
    ) {}

    /**
     * @return CharacterId
     */
    public function getId(): CharacterId
    {
        return $this->id;
    }

    /**
     * @return CharacterClass
     */
    public function getClass(): CharacterClass
    {
        return $this->class;
    }

    /**
     * @return CharacterItemLevel
     */
    public function getItemLevel(): CharacterItemLevel
    {
        return $this->itemLevel;
    }

    /**
     * @return CharacterLevel
     */
    public function getLevel(): CharacterLevel
    {
        return $this->level;
    }

    /**
     * @return CharacterMythicPlusRating
     */
    public function getMythicPlusRating(): CharacterMythicPlusRating
    {
        return $this->mythicPlusRating;
    }

    /**
     * @return CharacterName
     */
    public function getName(): CharacterName
    {
        return $this->name;
    }

    /**
     * @return CharacterRace
     */
    public function getRace(): CharacterRace
    {
        return $this->race;
    }

    /**
     * @return CharacterRealm
     */
    public function getRealm(): CharacterRealm
    {
        return $this->realm;
    }

    public function getRealmRank(): Rank
    {
        return $this->realmRank;
    }
}