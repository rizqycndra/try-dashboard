<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'price',
        'unit',
        'supplier_id',
    ];

    public function suppliers() {
        return $this->belongsTo(Supplier::class);
    }

    public function orderitem() {
        return $this->hasMany(OrderItem::class);
    }
}
