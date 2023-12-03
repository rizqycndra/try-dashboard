<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsIssue extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventory_id',
        'date',
        'notes',
        'total'
    ];

    public function inventory() {
        return $this->belongsTo(Inventory::class);
    }
}
