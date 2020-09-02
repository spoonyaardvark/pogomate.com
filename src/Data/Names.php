<?php

namespace Pogo\Data;

use Pogo\Pokemon;
use ReflectionClass;

class Names
{
    const CUSTOM = [
        Pokemon::NIDORAN_F => 'Nidoran♀',
        Pokemon::NIDORAN_M => 'Nidoran♂',
        Pokemon::FARFETCH_D => 'Farfetch\'d',
        Pokemon::MR_MIME => 'Mr. Mime',
        Pokemon::HO_OH => 'Ho-Oh',
        Pokemon::MIME_JR => 'Mime Jr.',
        Pokemon::SIRFETCH_D => 'Sirfetch\'d',
        Pokemon::TYPE_NULL => 'Type: Null',
        Pokemon::JANGMO_O => 'Jangmo-o',
        Pokemon::HAKAMO_O => 'Hakamo-o',
        Pokemon::KOMMO_O => 'Kommo-o',
        Pokemon::TAPU_KOKO => 'Tapu Koko',
        Pokemon::TAPU_LELE => 'Tapu Lele',
        Pokemon::TAPU_BULU => 'Tapu Bulu',
        Pokemon::TAPU_FINI => 'Tapu Fini',
        Pokemon::MR_RIME => 'Mr. Rime',
    ];

    protected static $names = [];
    protected static $codes = [];

    /**
     * @param Pokemon $pokemon
     * @return mixed|string
     */
    public static function getName(Pokemon $pokemon)
    {
        self::init();

        if (isset(self::$codes[$pokemon->getCode()])) {
            return self::$codes[$pokemon->getCode()];
        }

        $name = '';
        if ($pokemon->isShadow()) {
            $name .= 'Shadow ';
        }
        if ($pokemon->isAlolan()) {
            $name .= 'Alolan ';
        }
        if ($pokemon->isGalarian()) {
            $name .= 'Galarian ';
        }

        $name .= static::getShortName($pokemon);

        if ($form = $pokemon->getFormName()) {
            $name .= " ($form)";
        }
        return self::$codes[$pokemon->getCode()] = $name;
    }

    /**
     * @param Pokemon $pokemon
     * @param bool $link
     * @return mixed|string
     */
    public static function getShortName(Pokemon $pokemon, $link = false)
    {
        self::init();

        $pokedexId = $pokemon->getPokedexId();
        if (!$link && isset(self::CUSTOM[$pokedexId])) {
            return self::CUSTOM[$pokedexId];
        } elseif (static::$names[$pokedexId]) {
            return static::$names[$pokedexId];
        } else {
            return "Unknown/$pokedexId";
        }
    }

    protected static function init()
    {
        if (!empty(static::$names)) {
            return;
        }
        $fooClass = new ReflectionClass('\\Pogo\\Data\\PokemonList');
        $constants = $fooClass->getConstants();
        foreach ($constants as $name => $value) {
            static::$names[$value] = ucfirst(strtolower($name));
        }
    }

    /**
     * @return static[]
     */
    public static function getList()
    {
        static::init();
        return static::$names;
    }

    public static function link2id(string $link)
    {
        static $link2id = null;
        if ($link2id === null) {
            $fooClass = new ReflectionClass('\\Pogo\\Data\\PokemonList');
            $constants = $fooClass->getConstants();
            foreach ($constants as $name => $value) {
                $link2id[strtolower($name)] = $value;
            }
        }
        return $link2id[$link] ?? null;
    }
}