<?php

namespace L2JFacility\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    
    protected $connection = 'game_server';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'characters';

    protected $primaryKey = 'account_name';

    public $timestamps = false;

    protected $fillable = [];


}
