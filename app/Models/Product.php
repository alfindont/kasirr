<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = ['id'];
    
    // Definisikan kolom yang dapat diisi
    protected $fillable = ['name', 'price', 'stock', 'description'];


    public function purchases()
    {
        return $this->belongsToMany(Purchase::class, 'purchase_products')->withPivot('quantity');
    }

    
}
