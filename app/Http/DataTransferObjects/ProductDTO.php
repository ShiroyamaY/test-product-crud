<?php

namespace App\Http\DataTransferObjects;

use Illuminate\Foundation\Http\FormRequest;

class ProductDTO
{
    private function __construct(
        public string $name,
        public string $description,
        public string $price,
    )
    {}

    public static function fromRequest(
        FormRequest $request
    ): ProductDTO
    {
        return new ProductDTO(
            $request->validated('name'),
            $request->validated('description'),
            $request->validated('price')
        );
    }
}
