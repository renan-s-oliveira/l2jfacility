<?php

namespace L2JFacility;

class Rank
{
    public static function pvp($pagination = 10)
    {
        return Character::all()->orderByDesc('pvpkills');
    }

    public static function pk($pagination = 10)
    {
        return Character::all()->orderByDesc('pkkills');
    }

    public static function karma($pagination = 10)
    {
        return Character::all()->orderByDesc('karma');
    }
}
