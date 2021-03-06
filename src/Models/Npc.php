<?php

namespace L2JFacility\Models;

use L2JFacility\Models\RaidBoss;
use Illuminate\Database\Eloquent\Model;

class Npc extends Model
{
    
    protected $connection = 'game_server';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'npc';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [];

    public function raidboss()
    {
        return $this->hasOne(RaidBoss::class, 'id');
    }

}
