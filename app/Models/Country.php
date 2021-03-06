<?php

namespace Jsdecena\MCPro\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function provinces()
    {
    	return $this->hasMany('Jsdecena\MCPro\Models\Province');
    }
}
