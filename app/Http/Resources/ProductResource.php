<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'price' => $this->price,
            'sale' => $this->sale,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'detail' => $this->detail,
        ];
    }
}
