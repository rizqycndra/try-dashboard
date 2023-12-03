<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'total',
        'date_in',
        'date_out',
        'notes'
    ];

    public function item() {
        return $this->hasOne(Items::class);
    }

    public function stockadjustment() {
        return $this->hasMany(StockAdjustment::class);
    }

    public function goodsissue() {
        return $this->hasMany(GoodsIssue::class);
    }
}
