<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsReceipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'date',
        'notes'
    ];

    public function order() {
        return $this->hasOne(PurchaseOrder::class);
    }
}
