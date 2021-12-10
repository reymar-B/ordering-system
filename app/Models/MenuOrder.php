<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class MenuOrder extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'order_id',
        'qty',
        'isServed'
    ];


    public function orders()
    {

        return $this->belongsTo(Order::class);

    }

}
