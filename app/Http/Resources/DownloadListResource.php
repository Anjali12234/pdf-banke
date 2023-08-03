<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DownloadListResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'english_title' => $this->english_title,
            'files' =>$this->files,
            'slug' => $this->slug,
            'download_category_id' => $this->download_category_id,
            'publisher' => $this->publisher,
            'english_publisher' => $this->english_publisher,
            'publish_date' => $this->publish_date,
            'status' => $this->status
        ];
    }
}
