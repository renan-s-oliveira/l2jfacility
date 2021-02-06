<?php

namespace L2JFacility\Models;

use L2JAddCoin\Models\Character;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $connection = 'login_server';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'accounts';

    protected $primaryKey = 'login';

    public $timestamps = false;

    protected $fillable = [
        'login',
    ];

    public function characters()
    {
        return $this->hasMany(Character::class, 'account_name');
    }

}
