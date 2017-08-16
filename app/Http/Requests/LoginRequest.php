<?php

namespace marketplace\Http\Requests;

use marketplace\Http\Requests\Request;

class LoginRequest extends Request
{
    protected $redirect = '/signin';
    protected $errorBag = 'signin_store';
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
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function sanitize()
    {
        $input = $this->all();
        $input['email'] = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        // convert to md5
        $input['password'] = md5($input['password']);
        
        $this->replace($input);
    }

    public function forbiddenResponse()
    {
        return Response::make('Permission denied foo!', 403);
       // return $this->redirector->route('auth.register');
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required'  => 'Email wajib diisi',
            'email.email'  => 'Emailnya tidak valid',
            
            'password.required' => 'Password wajib diisi',
        ];
    }
}
