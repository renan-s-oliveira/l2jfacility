<?php

namespace L2JFacility;

use L2JFacility\Models\Character;
use L2JFacility\Models\GrandBoss;
use Illuminate\Support\Facades\DB;

class L2JFacility
{    
    /**
     * rank
     *
     * @param  mixed $type
     * @param  mixed $pagination
     * @return void
     */
    public static function rank(string $type, int $pagination = 10)
    {
        return Character::orderByDesc($type)->paginate($pagination);
    } 
       
    /**
     * count
     *
     * @param  mixed $table
     * @return void
     */
    public static function count(string $table)
    {
        return DB::connection($table == 'accounts' ? 'login_server' : 'game_server')->table($table)->count();
    }

    /**
     * online
     *
     * @return void
     */
    public static function online()
    {
        return Character::where('online', 1)->count();
    } 
       
    /**
     * grandboss
     *
     * @return void
     */
    public static function grandboss()
    {
        return GrandBoss::with('npc')->get();
    }  
      
    /**
     * boss
     *
     * @return void
     */
    public static function boss()
    {
        return RaidBoss::with('npc')->get();
    }
}
}
