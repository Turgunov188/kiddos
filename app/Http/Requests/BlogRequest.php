<?php

namespace App\Http\Requests;

class BlogRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $rules = [
            'title' => 'bail|required|max:225',
            'day' => 'bail|required|max:225', 
            'month' => 'bail|required|max:225', 
            'year' => 'bail|required|max:225', 
            'information' => 'bail|required|max:1000',                
            'image' => 'bail|required|max:225',
        ];
    }
}
