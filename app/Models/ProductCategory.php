<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $table = 'product_categories';

    public $fillable = [
        'name',
        'short_description',
        'url',
        'other'
    ];

    protected $casts = [
        'name' => 'string',
        'short_description' => 'string',
        'url' => 'string',
        'other' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:65535',
        'short_description' => 'required|string|max:65535',
        'url' => 'required|string|max:255',
        'other' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Product::class, 'product_categorie_id');
    }
}
