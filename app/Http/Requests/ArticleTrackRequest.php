<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleTrackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            "ack_date" => 'nullable|string|max:255',
            "scanned" => 'nullable|string|max:255',
            "rAfterMod" => 'nullable|string|max:255',
            "sForEval" => 'nullable|string|max:255',
            "rAfterEval" => 'nullable|string|max:255',
            "sForRev" => 'nullable|string|max:255',
            "rAfterRev" => 'nullable|string|max:255',
            "pubDate" => 'nullable|string|max:255',
        ];
    }
}
