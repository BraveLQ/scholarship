<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScholarshipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'image'=>asset('/storage/'.$this->image),
            'major_id'=>$this->major_id,
            'field_id'=>$this->field_id,
            'country_id'=>$this->country_id,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'description'=>$this->description,
            'source_url'=>$this->source_url,
            'video_url'=>$this->video_url,
        ];
    }
}
