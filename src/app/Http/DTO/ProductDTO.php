<?php

namespace App\Http\DTO;

use Illuminate\Database\Eloquent\Collection;

class ProductDTO
{
    public int $productId;
    public Collection $attributes;
    public Collection $categories;
}
