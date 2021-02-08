<?php

namespace L2JFacility\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class GrandeBoss extends Model
{
    
    protected $connection = 'game_server';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'grandboss_data';

    protected $primaryKey = 'boss_id';

    public $timestamps = false;

    protected $fillable = [];

    public function npc()
    {
        return $this->hasMany(Npc::class, 'id');
    }

}
