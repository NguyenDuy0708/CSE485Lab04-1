<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reader extends Model
{
    //// Reader.php
    public function borrows()
{
return $this->hasMany(Borrow::class);
} 
    protected $fillable = [
        'name',
        'birthday',
        'address',
        'phone',
    ];

}
