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
            "age" => $this->age(),
            "gender" => $this->gender,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "mother_id" => $this->mother_id,
            "father_id" => $this->father_id,
            "mother" => new PersonResource($this->mother),
            "father" => new PersonResource($this->father),
            // "children" => PersonResource::collection($this->children),
        ];
    }
}
