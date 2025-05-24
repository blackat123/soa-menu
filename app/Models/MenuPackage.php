<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuPackage extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_package_details');
    }

    public function packageDetails()
    {
        return $this->hasMany(MenuPackageDetail::class);
    }
}
