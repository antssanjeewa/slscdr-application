<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Doner extends JsonResource
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
            'name' => $this->name,
            'mobile' => $this->mobile,
            'gender' => $this->gender,
            'birth_day' => $this->birth_day,
            'nic' => $this->nic,
            'register_date' => $this->register_date,
            'state' => $this->state,
            'email' => $this->email
        ];
    }
}
