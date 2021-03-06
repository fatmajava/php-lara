<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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

            //
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ];
        

    }
//     public function messages()
// {
//     return [
//         'name.required' => 'A title is required please insert it ',
//         'email.required' => 'A message is required please insert it  ',
//     ];
// }
public function attributes()
{
    return [
        'name' => 'username',
        'email' => 'emailaddress',
    ];
}
    
}
