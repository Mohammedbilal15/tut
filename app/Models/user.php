<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\role;

class user extends Model
{
    use HasFactory;
    public function passport(){
        return $this->hasOne(Passport::class);
    }
    public function mobile(){
        return $this->hasMany(Mobile::class);
    }
    public function roles(){
        return $this->belongsToMany(role::class);
    }
}
