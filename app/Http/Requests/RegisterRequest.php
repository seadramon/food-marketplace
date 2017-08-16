<?php

namespace marketplace\Http\Requests;

use marketplace\Http\Requests\Request;
use Uuid;

class RegisterRequest extends Request
{
    protected $redirect = '/register';
    protected $errorBag = 'register_store';
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
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users',
            'jk' => 'required',
            'password' => 'required|min:8|max:15|confirmed', //|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/
            'agree' => 'required'
        ];
    }

    public function sanitize()
    {
        $input = $this->all();
        
        $input['email'] = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        if (null !== $this->password) {
            $input['password'] = md5($input['password']);
            unset($input['password_confirmation']);
        }
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
            'name.required'  => 'Nama wajib diisi',
            'name.max'  => 'Nama terlalu panjang',
            'name.min'  => 'Nama terlalu pendek',
            
            'email.required'  => 'Email wajib diisi',
            'email.email'  => 'Email tidak valid',
            'email.unique'  => 'Email sudah terpakai',

            'jk.required' => 'Anda belum memilih jenis kelamin',
            
            'password.confirmed' => 'Konfirmasi password berbeda',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'password.max' => 'Password maksimal 60 karakter',
            // 'password.regex' => 'Password minimal 8 karakter, harus ada huruf besar/kecil dan angka',

            'agree.required' => 'Untuk mendaftar kamu harus setuju dengan syarat & ketentuan Sewwa'
        ];
    }
}
