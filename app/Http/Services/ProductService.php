<?php

namespace App\Http\Services;

use App\Http\DataTransferObjects\Product\UpdateDTO;
use App\Http\DataTransferObjects\ProductDto;
use App\Http\DataTransferObjects\StoreDTO;
use App\Http\Services\Interfaces\ProductServiceInterface;
use App\Models\Product;
use Illuminate\Pagination\AbstractPaginator;

class ProductService implements ProductServiceInterface
{
    public function index(): AbstractPaginator
    {
        return Product::query()->paginate(10);
    }

    public function store(ProductDTO $productDTO): ?Product
    {
        $product = new Product([
            'name' => $productDTO->name,
            'description' => $productDTO->description,
            'price' => $productDTO->price,
        ]);

        return $product->save() ? $product : null;
    }

    public function update(Product $product, ProductDTO $productDTO): ?Product
    {
        $result = $product->update([
            'name' => $productDTO->name,
            'description' => $productDTO->description,
            'price' => $productDTO->price
        ]);

        return $result ? $product : null;
    }

    public function destroy(Product $product): ?Product
    {
        $result = $product->delete();

        return $result ? $product : null;
    }
}
