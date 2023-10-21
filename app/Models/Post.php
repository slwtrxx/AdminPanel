<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }
}
