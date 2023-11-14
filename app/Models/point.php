<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class point extends Model
{
    public function points()
    {
        return $this->hasMany(Point::class, 'FK_id_provider');
    }
}
