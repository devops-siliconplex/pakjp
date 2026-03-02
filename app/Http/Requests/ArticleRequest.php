<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        $data = [
            'article_num' => 'required|numeric',
            'title' => 'required|string|max:255',
            "description" => 'required|string',
            "author" => 'required|string|max:255',
            "pages" => 'required|string|max:255',
            "doi" => 'required|string|max:255',
            "keywords" => 'required|string|max:255',
            "volume" => 'required|string|max:255',
            "issue" => 'required|string|max:255',
            "issue_date" => 'required|string|max:255',
            "type" => 'required|string|max:255',
            "sup_issue" => 'required|string|max:255',
        ];
        if(isset(request()->request_type) && request()->request_type == 'update'){
            $data["file"] = 'nullable|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048';
        }
        else{
            $data["file"] = 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048';
        }
        return $data;
    }
}
