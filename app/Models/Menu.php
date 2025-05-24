<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'image',
        'name',
        'description',
        'price',
        'category_id',
    ];

    public function categories()
    {
        return $this->belongsTo(MenuCategory::class);
    }

    public function recipes()
    {
        return $this->hasMany(MenuRecipe::class);
    }

    public function packageDetails()
    {
        return $this->hasMany(MenuPackageDetail::class);
    }

    public function packages()
    {
        return $this->belongsToMany(MenuPackage::class, 'menu_package_details');
    }
}
