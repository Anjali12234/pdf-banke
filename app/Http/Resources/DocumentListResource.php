<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocumentListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id ?? '',
            'title' => $this->title ?? '',
            'english_title' => $this->english_title ?? '',
            'slug' => $this->slug ?? '',
            'document_category_id' => $this->document_category_id ?? '',
            'publisher' => $this->publisher ?? '',
            'english_publisher' => $this->english_publisher ?? '',
            'publish_date' => $this->publish_date ?? '',
            'status' => $this->status ?? '',
            'files' => $this->files ?? '',
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at
        ];
    }
}
