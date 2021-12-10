<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [

        'category_name',
    ];


    public function menus()
    {

        return $this->hasMany(Menu::class);

    }

}
