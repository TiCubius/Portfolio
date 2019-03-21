<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // We don't need timpstamps for tags.
    public $timestamps = false;
}
