<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'color',
        'order',
        'is_active'
    ];

    public function options()
    {
        return $this->hasMany(Option::class)/*->where('is_active',true)*/->orderBy('order','asc');
    }

    public function optionWithInactive()
    {
        return $this->hasMany(Option::class)->orderBy('order','asc');
    }
}
