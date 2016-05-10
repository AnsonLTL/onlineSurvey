<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ForseoRequest extends Request
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
     * //|unique:forseos
     * @return array
     */
    public function rules()
    {
        switch($this->method()) {
            case 'POST': {
                return [
                    'staffid' => 'required|max:10|unique:forseos',
                    'authornames' => 'required',
                    'forarea' => 'required'
                ];
            }
            case 'PATCH': {
                return [
                    'authornames' => 'required',
                    'forarea' => 'required'
                ];
            }
        }
    }
}
