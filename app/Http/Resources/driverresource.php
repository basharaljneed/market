<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class driverresource extends JsonResource
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
            "address" => $this->address,
            "phone" => $this->phone,
            "type_id" => $this->typeuser->type_name,
            'img_profile'=>$this->img_profile,
            "start_time" => $this->start_time,
            "end_time" => $this->end_time,
            "birth_date" => $this->birth_date,
            "vehicle_number" => $this->vehicle_number,
            "subscription_value" => $this->subscription_value,
            "order_value" => $this->order_value,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at


        ];
    }
}
