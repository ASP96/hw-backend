<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Person
 */
class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "lastname" => $this->lastname,
            "name" => $this->name,
            "middlename" => $this->middlename,
            "birthday" => $this->birthday,
            "gender" => $this->gender,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
