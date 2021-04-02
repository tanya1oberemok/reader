<?php

namespace App\Http\Requests;

//use Illuminate\Http\Request;

class BookRequest extends Request
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
            'title'       => 'required|string|min:2|max:30',
            'short_description' => 'string|min:2|max:255',
            'category'     => 'string|min:2|max:30',
            'cover'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author_id'    => 'exists:authors,id',
            'publishing_office_id' => 'exists:publishing_offices,id'
        ];

    }
}
