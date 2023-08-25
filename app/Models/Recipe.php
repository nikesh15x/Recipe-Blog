<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chef;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_name','description','proce_dure','details','chef_id'
    ];
    public function chef()
    {
        return $this->belongsTo('App\Models\Chef');
    }
}
