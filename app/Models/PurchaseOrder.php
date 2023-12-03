<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'supplier_id',
        'status',
    ];

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function receipt() {
        return $this->hasOne(GoodsReceipt::class);
    }
}
