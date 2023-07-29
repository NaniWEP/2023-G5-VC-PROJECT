<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\WorkshopResource;
use App\Models\WorkshopPost;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkshopRegistrationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
            $workshop = WorkshopPost::find($this->workshop_id);
            return [
                'id' => $this->id,
                'name'=> $this->name,
                'email'=>$this->email,
                'phone_number'=>$this->phone_number,
                'gender'=>$this->gender,
                'age'=>$this->age,
                'user_id'=>$this->user_id,
                'workshop'=> new WorkshopResource($workshop),
            ];
    }
}
