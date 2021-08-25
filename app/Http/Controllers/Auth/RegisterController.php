<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Siswa;
use App\Mail\WelcomeMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       
        if($data['role'] == 'admin'){
            $user = User::create([
                'name' => $data['name'],
                'role' => $data['role'],
                'email' => $data['email'],
                'kelas' => '0',
                'jurusan' => 'x',
                'password' => Hash::make($data['password']),
            ]);
        }
        else{
            $user = User::create([
                'name' => $data['name'],
                'role' => $data['role'],
                'email' => $data['email'],
                'kelas' => $data['kelas'],
                'jurusan' => $data['jurusan'],
                'password' => Hash::make($data['password']),
            ]);

            Siswa::create([
                'user_id' => $user ->id,
                'nama' =>$data['name'],
                'email' =>$data['email'],
                'kelas' =>$data['kelas'],
                'jurusan' =>$data['jurusan'],
            ]);
        }
        Mail::to($data['email'])->send(new WelcomeMail($user));
        return $user;
    }
}
