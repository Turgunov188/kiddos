<?php

namespace App\Http\Requests;

class CourseRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $rules = [
            'lesson' => 'bail|required|max:225',
            'time' => 'bail|required|max:225', 
            'title' => 'bail|required|max:1000',                
            'image' => 'bail|required|max:225',
        ];
    }
}
