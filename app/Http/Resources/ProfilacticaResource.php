<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Profilactica
 */
class ProfilacticaResource extends JsonResource
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
            'name' => $this->name,
            'name_short' => $this->name_short,
            'name_full' => $this->name_full,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
