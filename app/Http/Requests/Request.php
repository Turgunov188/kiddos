<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    /**
     * Authorization
     *
     * @return boolean
     */
    public function authorize()
    {
        return true;
        //return auth()->check(); //ТОЛЬКО ДЛЯ ЗАЛОГИНЕННЫХ (НО ОНО ТИПА И ТАК И В КОНТРОЛЛЕРЕ (В КОНСТРУКТОРЕ) И ВО ВЬЮ (if auth))
    }
}
