<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [

        'user_id',
        'discount'

    ];

    public function menu()
    {

        return $this->belongsToMany(Menu::class)
        ->withTimestamps()->withPivot(['qty'])->orderByPivot('created_at', 'desc'); //latest('created_at', 'desc')

    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }

}
