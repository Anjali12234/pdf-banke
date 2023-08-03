<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    
    public function toArray(Request $request): array
    {
        return[
            'image' => $this->image,
            'name' => $this -> name,
            'department_id' => $this -> department_id,
            'designation_id' => $this -> designation_id,
            'email' => $this -> email,
            'phone' => $this -> phone,
            'address' => $this -> address,
            'position' => $this -> position
        ];
    }
}
