<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptops_Details extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'class',
        'processor',
        'speed',
        'screen_size',
        'color',
        'hard_disk_size',
        'cpu_model',
        'ram_memory',
        'operating_system',
        'card_description',
        'graphics_coprocessor',
    ];
    public function laptops(){
        return $this->belongsTo('App\Models\Laptops');
    }
}
