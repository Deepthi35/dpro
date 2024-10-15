<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';

    public $fillable = [
        'name',
        'image_url',
        'image',
        'img_alt_text',
        'url',
        'price',
        'short_description',
        'long_description',
        'product_categorie_id'
    ];

    protected $casts = [
        'name' => 'string',
        'image_url' => 'string',
        'image' => 'string',
        'img_alt_text' => 'string',
        'url' => 'string',
        'price' => 'string',
        'short_description' => 'string',
        'long_description' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'image_url' => 'nullable|string|max:65535',
        'image' => 'nullable|string|max:255',
        'img_alt_text' => 'nullable|string|max:255',
        'url' => 'nullable|string|max:255',
        'price' => 'nullable|string|max:255',
        'short_description' => 'nullable|string|max:65535',
        'long_description' => 'nullable|string|max:65535',
        'product_categorie_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function productCategorie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\ProductCategory::class, 'product_categorie_id');
    }
}
