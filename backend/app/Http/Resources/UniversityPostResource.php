<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UniversityPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return[
        'title' => $this->title,
        'description' => $this->description,
        'date' => $this->date,
        'status' => $this->status,
        'major_id' => $this->major_id,
        'user_id' => $this->user_id,
       ];
    }
}
