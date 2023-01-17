<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'drop_off',
        'shipping_fee'
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('qty', 'sub_total');
    }

    // $order->products()->sync([
    //     1 => ['qty' => 100, 'sub_total' => 100],
    //     2 => ['qty' => 100, 'sub_total' => 100],
    //     3 => ['qty' => 100, 'sub_total' => 100],
    //     4 => ['qty' => 100, 'sub_total' => 100],
    //     5 => ['qty' => 100, 'sub_total' => 100],
    // ]);
}
