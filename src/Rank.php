<?php

namespace L2JFacility;

class Rank
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
