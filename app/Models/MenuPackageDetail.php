<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuPackageDetail extends Model
{
    protected $fillable = [
        'menu_package_id',
        'menu_id'
    ];

    public function menus()
    {
        return $this->belongsTo(Menu::class);
    }

    public function packages()
    {
        return $this->belongsTo(MenuPackage::class);
    }
}
