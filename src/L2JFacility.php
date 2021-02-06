<?php

namespace L2JFacility;

use L2JFacility\Models\Character;

class L2JFacility
{
    public static function rank(string $type, int $pagination = 10)
    {
        return Character::orderByDesc($type)->paginate($pagination);
    }
    public static function count(string $table, string $db = 'game_server')
    {
        return DB::connection($db)->table($table)->count();
    }
}
