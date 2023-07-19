<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowMajorPostResource extends JsonResource
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
            'date' => $this->date,
            'status' => $this->status,
            // 'major' => [
            //     'title' => $this->major->name,
            //     'description' => $this->major->description,
            //     'yearDuration' => $this->major->year_duration,
            //     'price' => $this->major->price,
            //     'applyDate' => $this->major->apply_date,
            //     'startDate' => $this->major->start_date,
            //     'monthDuration' => $this->major->month_duration,
            //     'University' => $this->major->university_id,
            // ],
            'major' => new MojorResource($this->major_id),
            'schoolManager' => $this->user_id,
        ];
    }
}
