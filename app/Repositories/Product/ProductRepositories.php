<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepositories;
class ProductRepositories extends BaseRepositories implements ProductRepositoriesInterface {
    public function getModel()
    {
        return Product::class;
    }
}