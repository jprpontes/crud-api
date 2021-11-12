<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactListItemResource extends JsonResource
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
            'id'            => $this->_id,
            'name'          => $this->name,
            'email'         => $this->email,
            'phone_number'  => $this->phone_number,
            'zipCode'       => $this->zipCode,
            'address'       => $this->address,
            'addressNumber' => $this->address_number,
            'neighborhood'  => $this->neighborhood,
            'state'         => $this->state,
            'city'          => $this->city,
        ];
    }
}
