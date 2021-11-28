<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'description'=>$this->detail,
            'price'=>$this->price,
            'stock'=>$this->stock,
            'discount'=>$this->discount."%",
            'TotalPrice'=> round((1-($this->discount/100))*$this->price,2),
            'rating'=> $this->reviews->count() > 0 ? round($this->reviews->count()/$this->reviews->sum('star'),2) : "No raiting Yet",
            'href'=>[
                'reviews'=>route('review.index',$this->id)
            ]
        ];
    }
}
