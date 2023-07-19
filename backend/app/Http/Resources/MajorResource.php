<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\GetUserResource;
class MajorResource extends JsonResource
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
            'title' => $this->name,
            'description' => $this->description,
            'year_duration' => $this->year_duration,
            'month_duration' => $this->month_duration,
            'apply_date' => $this->apply_date,
            'start_date' => $this->start_date,
            'price' => $this->price,
            'university' => new UniversityResource($this->university),
        ];
    }
}
