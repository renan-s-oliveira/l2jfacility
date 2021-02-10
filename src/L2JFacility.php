<?php

namespace L2JFacility;

use L2JFacility\Models\Npc;
use L2JFacility\Models\Castle;
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
    public static function boss(int $pagination = 10)
    {
        return Npc::with('raidboss')->where('type','L2RaidBoss')->orderBy('level')->paginate($pagination);
    }
    
    /**
     * castle
     *
     * @param  mixed $format
     * @return void
     */
    public static function castle($format)
    {
        return Castle::castle($format);
    }
    
    
    /**
     * showCastle
     *
     * @param  mixed $name
     * @param  mixed $format
     * @return void
     */
    public static function showCastle($name, $format)
    {
        return Castle::showCastle($name, $format);
    }

    /**
     * Fort
     *
     * @param  mixed $format
     * @return void
     */
    public static function fort($format)
    {
        return Castle::castle($format);
    }
    
    
    /**
     * showFort
     *
     * @param  mixed $name
     * @param  mixed $format
     * @return void
     */
    public static function showFort($name, $format)
    {
        return Castle::showCastle($name, $format);
    }

}
