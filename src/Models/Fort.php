<?php

namespace L2JFacility\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Fort extends Model
{
    
    protected $connection = 'game_server';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'fort';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [];

    public static function fort($format)
    {
        $fort = Fort::all();
        foreach($fort as $c)
        {
            $c->siegeDate =  Carbon::parse($c->siegeDate)->format($format);
        }
        return $fort;
    }

    public static function showFort($name, $format)
    {
        $fort = Fort::where('name', $name)->first();
        $fort->siegeDate = Carbon::parse($fort->siegeDate)->format($format);
        return $fort;
    }

}
