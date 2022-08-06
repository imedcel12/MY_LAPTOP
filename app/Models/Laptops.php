<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptops extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'series',
    ];

    public function laptops_details(){
        return $this->hasMany('App\Models\Laptops_Details');
    }
}
