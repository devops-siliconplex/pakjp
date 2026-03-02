<?php

namespace App\Http\Requests;

use App\Rules\Recaptcha;
use Illuminate\Foundation\Http\FormRequest;

class SubmissionRequest extends FormRequest
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
            'submission_type' => 'required',
            'title_ms' => 'required',
            'all_authors' => 'required',
            'email' => 'required',
            'fileUploadUndertaking' => 'required|mimes:doc,docx,pdf|max:2097152', //max 2097152 $allowed_ext1 = array('doc', 'docx', 'pdf'); //both files are reequired
            'fileUploadArticle' => 'required|mimes:doc,docx,pdf|max:2097152',
            'g-recaptcha-response' =>   ['required', new Recaptcha()]
        ];
    }
}
