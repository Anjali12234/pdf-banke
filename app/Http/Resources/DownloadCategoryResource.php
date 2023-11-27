<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DownloadCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
        [
            "id"=>$this->id,
            "title" => $this->title,
            "english_title" => $this->english_title,
            'slug'=>$this->slug,
            'position'=>$this->position,
            'status'=>$this->status,
            "updated_at"=>$this->updated_at,
            "created_at"=>$this->created_at,
            "deleted_at"=>$this->deleted_at,
        ];
    }
}
