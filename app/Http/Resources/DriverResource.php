<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this->name);
        // return parent::toArray($request);
         return [
            'index' => $this->id,
            'd_name' => $this->name,
            'd_email' => $this->email,
       
        ];
    }
}
