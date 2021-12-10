<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [

        'menu_name',
        'price',
        'tax'

    ];


    public function menuCategory()
    {

        return $this->belongsTo(MenuCategory::class);

    }

    public function order()
    {

        return $this->belongsToMany(Order::class);

    }

}
