<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRegRequest extends Request
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
        
        $this->sanitize();
        return [
            'full_name' => 'required',
            'address1'  => 'required',
            'gender'    => 'required',
            'country'   => 'required',

            'username'  => 'required|max:100|unique:users',
            'phone_number' => 'required|between:11,16',
            'email' => 'required',
            'password' => 'required',
            're-password' => 'required|same:password',

            'referrar_id' => 'required',
            'upline_id'    => 'required',
            'placement'    => 'required'
        ];
    }

    public function sanitize()
        {
            $input = $this->all();

            
            $input['full_name'] = filter_var($input['full_name'], FILTER_SANITIZE_STRING);
            $input['address1'] = filter_var($input['address1'], FILTER_SANITIZE_STRING);
            $input['address2'] = filter_var($input['address2'], FILTER_SANITIZE_STRING);
            $input['gender'] = filter_var($input['gender'], FILTER_SANITIZE_STRING);
            $input['country'] = filter_var($input['country'], FILTER_SANITIZE_STRING);


            $input['username'] = filter_var($input['username'], FILTER_SANITIZE_STRING);
            $input['phone_number'] = filter_var($input['phone_number'],FILTER_SANITIZE_STRING);
            $input['email'] = filter_var($input['email'], FILTER_SANITIZE_STRING);
            
            $input['referrar_id'] = filter_var($input['referrar_id'], FILTER_SANITIZE_STRING);
            $input['upline_id'] = filter_var($input['upline_id'], FILTER_SANITIZE_STRING);
            
            $this->replace($input);     
        }
}
