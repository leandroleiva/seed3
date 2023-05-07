<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'name',
        'icon',
        'color',
        'order',
        'route',
        'is_active'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
