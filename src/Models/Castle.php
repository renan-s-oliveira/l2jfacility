<?php

namespace L2JFacility\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Castle extends Model
{

    protected $connection = 'game_server';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'castle';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [];
    
    public static function castle($format)
    {
        $castle = Castle::all();
        foreach($castle as $c)
        {
            $c->siegeDate =  Carbon::parse($c->siegeDate)->format($format);
        }
        return $castle;
    }

    public static function showCastle($name, $format)
    {
        $castle = Castle::where('name', $name)->first();
        $castle->siegeDate = Carbon::parse($castle->siegeDate)->format($format);
        return $castle;
    }
}
