<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'item_id',
        'total',
        'price',
    ];

    public function purchase() {
        return $this->belongsTo(PurchaseOrder::class);
    }

    public function item() {
        return $this->belongsTo(Items::class);
    }
}
