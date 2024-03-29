<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function collections(){
        return $this->belongsToMany(Collection::class);
    }
}
