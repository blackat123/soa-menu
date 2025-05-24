<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuRecipe extends Model
{
    protected $fillable = [
        'quantity',
        'menu_id',
        'inventory_id'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
