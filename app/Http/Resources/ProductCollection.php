<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Config;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name != null ? $this->name : 'Empty',
            'description' => $this->description != null ? $this->description : 'Empty',
            'availability' =>$this->availability != null ? $this->availability:'Empty',
            'category' =>$this->category != null ? $this->category:'Empty',
            'price' => $this->price != null ? $this->price:0,
            'size' => $this->size != null ? $this->size:0,
            'quantity' => $this->quantity != null ? $this->quantity:0,
            'picture' => $this->picture != null ? Config::get('constants.IMAGE_URL').$this->picture.'.jpg':'Empty',
        ];
    }
}
