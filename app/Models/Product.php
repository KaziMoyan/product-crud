<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Add the fields to the $fillable array
    protected $fillable = [
        'name',
        'sku',
        'price',
        'description',
        'image', // Add this if you're using mass-assignment for the image
    ];
    public function productImages()
{
    return $this->hasMany(ProductImage::class);
}

}
