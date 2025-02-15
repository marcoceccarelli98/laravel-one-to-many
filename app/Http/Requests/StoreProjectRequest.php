<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|unique:projects,title',
            'type_id' => 'nullable|exists:types,id',
            'description' => 'required|string',
            'status' => 'required|string|max:20',
            'start_date' => 'nullable|date|after:1998-10-9',
            'end_date' => 'nullable|date|after:1998-10-9',
            'images' => 'required|string',
            'slug' => 'nullable|string',
        ];
    }
}
