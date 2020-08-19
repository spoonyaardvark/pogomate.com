<?php

namespace Pogo;

class Strings
{
    const ALOLAN = 'alolan';
    const GALARIAN = 'galar';
    const SHADOW = 'shadow';
    const FLAG_ENUM = [
        self::ALOLAN,
        self::GALARIAN,
        self::SHADOW
    ];

    /** @var Pokemon[] */
    protected $pokemon = [];
    /** @var array[] */
    protected $reasons = [];

    public function __construct()
    {
    }

    public function addLists($lists)
    {
        foreach ($lists as $volume => $parts) {
            $this->addList($parts, $volume);
        }
    }

    public function addList($list, $srcReason = null)
    {
        $reason = '';
        foreach ($list as $title => $data) {
            foreach ($data as $code) {
                $reason = $srcReason ? "$srcReason: $title" : null;
                $newPok = $this->addPokemon($code, $reason);

                if ($reason) {
//                    $shortName = Pokemon::get($newPok->getPokedexId())->getName();
                    $reason = "⇨ #{$newPok->getPokedexId()} {$newPok->getName()} ($reason)";
                }
                while ($newPokId = $newPok->getEvolveFrom()) {
//                    echo "[$newPokId]";
                    $newPok = $this->addPokemon($newPokId, $reason);
                }
            }
        }
    }

    public function getReasons()
    {
        $pokemonList = $this->pokemon;
        usort($pokemonList, function ($v1, $v2) {
            if ($v1->getPokedexId() > $v2->getPokedexId()) {
                return 1;
            } elseif ($v1->getPokedexId() < $v2->getPokedexId()) {
                return -1;
            } elseif ($v1->getCode() > $v2->getCode()) {
                return 1;
            } elseif ($v1->getCode() < $v2->getCode()) {
                return -1;
            }
            return 0;
        });
        $result = [];
        foreach ($pokemonList as $pokemon) {
            $name = '#' . $pokemon->getPokedexId() . ' ' . $pokemon->getName();
            $subResult = [];
            foreach ($this->reasons[$pokemon->getCode()] as $reason) {
                $subResult[] = $reason;
            }
            $result[$name] = $subResult;
        }
        return $result;
    }

    /**
     * @param mixed $code
     * @param string $reason
     * @return Pokemon
     */
    protected function addPokemon($code, $reason = null)
    {
        if (!isset($this->pokemon[$code])) {
            $this->pokemon[$code] = Pokemon::get($code);
        }
        if ($reason) {
            if (!isset($this->reasons[$code])) {
                $this->reasons[$code] = [];
            }
            $this->reasons[$code][] = $reason;
        }
        return $this->pokemon[$code];
    }

    public function getExcludeString()
    {
        $includes = [];
        $includeFrom = 0;

        $flagArr = [];
        foreach (self::FLAG_ENUM as $flag) {
            $flagArr[$flag] = 0;
        }

        $list = [];
        $clarify = [];
        foreach ($this->pokemon as $code => $pokemon) {
            $pokedexId = $pokemon->getPokedexId();
            $list[$pokedexId] = 1;
            if ($pokedexId !== $code && !isset($this->pokemon[$pokedexId])) {
                if (!isset($clarify[$pokedexId])) {
                    $clarify[$pokedexId] = $flagArr;
                }
                if ($pokemon->isAlolan()) {
                    $clarify[$pokedexId][self::ALOLAN] = 1;
                }
                if ($pokemon->isGalarian()) {
                    $clarify[$pokedexId][self::GALARIAN] = 1;
                }
                if ($pokemon->isShadow()) {
                    $clarify[$pokedexId][self::SHADOW] = 1;
                }
            }
        }

        // combine includes & clarify
        ksort($clarify);
        foreach ($clarify as $id => $bits) {
            $sortedBits = [];
            foreach ($bits as $flag => $enabled) {
                if ($enabled) {
                    $sortedBits[] = $flag;
                }
            }
            if (!empty($sortedBits)) {
                $result[] = $id . ',!' . implode(',!', $sortedBits);
            }
        }

        for ($i = 1; $i <= Settings::MAX_POKEDEX_ID; $i++) {
            if (isset($list[$i])) {
//                echo "[$i]";
                if ($includeFrom) {
                    if ($includeFrom == $i - 1) {
                        $includes[] .= $includeFrom;
                    } else {
                        $includes[] .= "$includeFrom-" . ($i - 1);
                    }
                    $includeFrom = 0;
                }
            } else {
                if (!$includeFrom) {
                    $includeFrom = $i;
                }
            }
        }
        if ($includeFrom) {
            if ($includeFrom == $i - 1) {
                $includes[] .= $includeFrom;
            } else {
                $includes[] .= "$includeFrom-" . ($i - 1);
            }
        }

        return [implode(',', $includes)] . '&' . implode('&', $result);
    }

    public function getIncludeString()
    {
        $includes = [];
        $includeFrom = 0;

        $list = [];
        foreach ($this->pokemon as $pokemon) {
            $list[$pokemon->getPokedexId()] = 1;
        }

        for ($i = 1; $i <= Settings::MAX_POKEDEX_ID; $i++) {
            if (isset($list[$i])) {
//                echo "[$i]";
                if (!$includeFrom) {
                    $includeFrom = $i;
                }
            } elseif ($includeFrom) {
                if ($includeFrom == $i - 1) {
                    $includes[] = $includeFrom;
                } else {
                    $includes[] .= "$includeFrom-" . ($i - 1);
                }
                $includeFrom = 0;
            }
        }
        if ($includeFrom) {
            if ($includeFrom == $i - 1) {
                $includes[] = $includeFrom;
            } else {
                $includes[] .= "$includeFrom-" . ($i - 1);
            }
        }
        return implode(',', $includes);
    }
}