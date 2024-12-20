<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\HardwareModel;
use App\Http\Resources\HardwareModelResource;

/**
 * @mixin \App\Models\Vendor
 */
class VendorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            "id" => $this->id,
            "name" => $this->name,
            "country" => $this->country,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "models" => HardwareModelResource::collection($this->models)
        ];
    }
}
