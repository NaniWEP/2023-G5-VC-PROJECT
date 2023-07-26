<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class FavoriteUniversityResource extends JsonResource
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
            'university' => [
               "title" => $this->universityPost->title,
               "description" => $this->universityPost->description,
               "date" => $this->universityPost->date,
               "status" => $this->universityPost->status,
               "major" => new MajorResource($this->universityPost->major),
            ],
        ];
    }
}
