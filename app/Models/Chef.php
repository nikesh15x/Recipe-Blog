<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;
    protected $fillable = [
            'name','speciality','age','country'
    ];
    public function recipe()
    {
        return $this->hasMany('App\Models\Recipe');
    }
}
