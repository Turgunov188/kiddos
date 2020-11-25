<?php

namespace App\Http\Requests;

class TeacherRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $rules = [
            'name' => 'bail|required|max:225',
            'job' => 'bail|required|max:225', 
            'about' => 'bail|required|max:1000',                
            'image' => 'bail|required|max:225',
        ];
    }
}
