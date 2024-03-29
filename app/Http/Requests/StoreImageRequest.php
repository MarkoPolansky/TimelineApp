<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => ['required','mimes:jpg,png,gif','max:2048'],
            'event_id' => ['required','exists:event,id'],
            'title' => ['required','string','max:255'],
            'description'  => ['required','string','max:1000'],
        ];
    }
}
