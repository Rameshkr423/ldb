<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExecutiveRequest extends FormRequest
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
            'name' => 'required',
            'username' => 'required', 
            'email_id' => 'required',
            'roles' => 'required', 
            'lender_slug' => 'required',
            'product_slug' => 'required',
            'is_super_admin' => 'required'
        ];
    }
}
