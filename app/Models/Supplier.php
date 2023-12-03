<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'contact',
        'email',
    ];

    public function inventory() {
        return $this->belongsTo(Inventory::class);
    }

    public function item() {
        return $this->hasMany(Items::class);
    }

    public function order() {
        return $this->hasMany(PurchaseOrder::class);
    }
}
