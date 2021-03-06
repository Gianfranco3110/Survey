<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    use HasFactory;
    protected $fillable = ['valor','user_id','encuestas_id'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}

