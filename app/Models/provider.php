<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function points()
    {
        return $this->hasMany(Point::class, 'FK_id_provider');
    }
}
