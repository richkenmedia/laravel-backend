<?php

namespace app\Http\Requests;

use App\Http\Requests\Request;

class UpdateRolesRequest extends Request
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
            'name' => 'required|unique:roles,name,'.$this->segment(3),
            'description' => 'required|unique:roles,description,'.$this->segment(3),
        ];
    }
}
