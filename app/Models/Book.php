<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //// Book.php
public function borrows()
{
return $this->hasMany(Borrow::class);
}
}
