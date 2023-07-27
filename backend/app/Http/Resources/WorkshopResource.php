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
            'id' => $this->id,
            'name' => $this -> name,
            'venue' => $this -> venue,
            'description' => $this -> description,
            'date' => $this -> date,
            'time' => $this -> time,
            'location' => $this -> location,
            'organizer' => $this -> organizer,
            'variable_ticket' => $this -> variable_ticket,
            'contact' => $this -> contact,
            'status' => $this -> status,
            'user_id' => $this -> user_id
        ];
    }
}
