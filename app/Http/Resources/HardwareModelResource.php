<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 *  @mixin \App\Models\HardwareModel
 */
class HardwareModelResource extends JsonResource
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
            'vendor_id' => $this->vendor_id,
            'head' => $this->head,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
