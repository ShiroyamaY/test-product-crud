<?php

namespace App\Http\Services\Interfaces;

use App\Http\DataTransferObjects\ProductDTO;
use App\Models\Product;
use Illuminate\Pagination\AbstractPaginator;

interface ProductServiceInterface
{
    public function index(): AbstractPaginator;
    public function store(ProductDTO $productDTO): ?Product;
    public function update(Product $product, ProductDTO $productDTO): ?Product;
    public function destroy(Product $product): ?Product;
}
