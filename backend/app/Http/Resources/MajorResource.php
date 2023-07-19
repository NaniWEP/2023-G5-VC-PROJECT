<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MojorResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'yearDuration' => $this->year_duration,
            'price' => $this->price,
            'applyDate' => $this->apply_date,
            'startDate' => $this->start_date,
            'monthDuration' => $this->month_duration,
            'University' => new UniversityResource($this->university_id),
        ];
    }
}
