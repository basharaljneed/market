<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class marketresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [

            'id' => $this->id,
            "name" => $this->name,
            "phone" => $this->phone,
            "type_id" => $this->typeuser->type_name,
            "market_type" => $this->markettype->markets_type,
            'img_profile'=>$this->img_profile,
            "img_back"=>$this->img_back,
            "start_time" => $this->start_time,
            "end_time" => $this->end_time,
            "card_number" => $this->card_number,
            "card_holder" => $this->card_holder,
            "commerical_number" => $this->commerical_number,
            "api_domain" => $this->api_domain,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at


        ];
    }
}
