<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "event_name" => ['required', 'unique:App\Models\Event,event_name', 'max:255'],
            "event_date" => ['required', 'date'],
            "event_max_capacity" => ['required', 'integer' ,'min:2', 'max:500'], // Multiple rules in Array format
            "event_speaker_name" => ['required', 'max:255'],
            "event_location_name" => 'nullable|max:255', //Multiple rules in String format
            "event_meetup_url" => 'nullable|url',
            "event_is_virtual" => ['required', 'boolean']
        ];
    }
}
