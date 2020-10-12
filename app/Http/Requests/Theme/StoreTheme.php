<?php

namespace App\Http\Requests\Theme;

use App\Http\Requests\CoreRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreTheme extends CoreRequest
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
            'primary_color' => 'required',
            'secondary_color' => 'required',
            'sidebar_bg_color' => 'required',
            'sidebar_text_color' => 'required'
        ];
    }
}
