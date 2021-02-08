<?php

namespace L2JFacility\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $connection = 'game_server';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'items';

    protected $primaryKey = 'object_id';

    public $timestamps = false;

    protected $fillable = [
        'owner_id',
        'object_id',
        'item_id',
        'count',
        'enchant_level',
        'loc',
        'loc_data',
        'time_of_use',
        'custom_type1',
        'custom_type2',
        'mana_left',
        'time',
    ];

}
