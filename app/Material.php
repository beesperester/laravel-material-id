<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Beesperester
use Beesperester\Color\Color;

class Material extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'hash',
        'color',
    ];

    public function getHashAttribute()
    {
        $salt = '';

        return sha1($this->name.$salt);
    }

    public function getColorAttribute()
    {
        return Color::fromHex('#'.substr($this->hash, 0, 6));
    }
}
