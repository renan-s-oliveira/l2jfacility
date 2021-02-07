<?php

namespace L2JFacility;

use L2JFacility\Models\Character;
use Illuminate\Support\Facades\DB;

class L2JFacility
{
    public static function rank(string $type, int $pagination = 10)
    {
        return Character::orderByDesc($type)->paginate($pagination);
    }
    public static function count(string $table)
    {
        return DB::connection($table == 'accounts' ? 'login_server' : 'game_server')->table($table)->count();
    }
    public static function online()
    {
        return Character::where('online', 1)->count();
    }
}
