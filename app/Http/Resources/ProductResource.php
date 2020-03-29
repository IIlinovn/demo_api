<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'anons' => $this->anons,
            'desc' => $this->desc,
            'price' => $this->price,
            'image' => $this->image,
            'category_id' => $this->category_id,
            'category' => $this->categoryFull,
        ];
    }
}
