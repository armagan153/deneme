<?php

namespace App\SuperAdmin\Http\Requests\Api\Company;

use App\SuperAdmin\Http\Requests\Api\SuperAdminBaseRequest;

class GlobalCompanyRequest extends SuperAdminBaseRequest
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
        $rules = [
            'name'    => 'required',
            'short_name'    => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'timezone' => 'required',
            'currency_id' => 'required',
        ];

        return $rules;
    }
}
