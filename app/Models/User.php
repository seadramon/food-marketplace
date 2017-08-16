<?php

namespace marketplace;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use Cache;

class User extends Authenticatable implements SluggableInterface
{
    use SluggableTrait;

    protected $table = 'users';
    protected $keyType = 'uuid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    public static function boot() {
        parent::boot();

        static::saved(function(){
            Cache::tags('user')->flush();
        });

        static::deleted(function(){
            Cache::tags('user')->flush();
        });
    }
}
