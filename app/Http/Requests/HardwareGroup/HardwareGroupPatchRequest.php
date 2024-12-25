<?php

namespace App\Http\Requests\HardwareGroup;

use Illuminate\Foundation\Http\FormRequest;

class HardwareGroupPatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'parent_id' => ['nullable|exists:hardware_groups,email'],
        ];
    }
}
