<?php

namespace L2JFacility\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Castle extends Model
{
    use DateTimeInterface;

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

}
