<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkshopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this -> name,
            'description' => $this -> description,
            'date' => $this -> date,
            'time' => $this -> time,
            'location' => $this -> location,
            'organizer' => $this -> organization,
            'contact' => $this -> contact,
            'status' => $this -> status,
            'user_id = $this -> user_id'
        ];
    }
}
