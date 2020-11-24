<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiEventResource extends JsonResource
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
            'event_title' => $this->title,
            'event_description' => $this->description,
            'created_by' => $this->creator->name,
            'status' => $this->status == '1' ? 'open' : 'close'
        ];
    }
}
