<?php

namespace App\Http\DataTransferObjects\Product;

use App\Http\DataTransferObjects\ProductDTO;
use App\Http\Requests\Api\V1\Product\UpdateProductRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductDTO
{
    private function __construct(
        public ?string $name,
        public ?string $description,
        public ?string $price,
    )
    {}

    public static function fromRequest(
        UpdateProductRequest $request
    ): UpdateProductDTO
    {
        return new UpdateProductDTO(
            $request->validated('name'),
            $request->validated('description'),
            $request->validated('price')
        );
    }
}
