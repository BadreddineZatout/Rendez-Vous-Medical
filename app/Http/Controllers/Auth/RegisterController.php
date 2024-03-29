<?php

namespace App\Http\Controllers\Auth;

use App\Commune;
use App\Http\Controllers\Controller;
use App\Medecin;
use App\Patient;
use App\Providers\RouteServiceProvider;
use App\Specialite;
use App\User;
use App\Wilaya;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return validator::make($data, [
            'nom' => ['required', 'string', 'min:2:', 'max:255'],
            'prenom' => ['required', 'string', 'min:2', 'max:255'],
            'wilayachoice' => ['required', 'gt:0'],
            'communechoice' => ['required', 'gt:0'],
            'adr' => ['required', 'string', 'min:10', 'max:255'],
            'phone' => ['required' ,'regex:/(0)[567][0-9]{8}/', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'sex' => ['required'],
            'role' => ['required'],
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
        $spec = (int)$data['specialitechoice'];
        $lat = (double)$data['lat'];
        $lng = (double)$data['lng'];
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'user_type' => $data['role'],
            'wilaya' => (int)$data['wilayachoice'],
            'commune' => (int)$data['communechoice'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'sex' => $data['sex'],
            'adresse' => $data['adr'],
            'date_naissance' => $data['dn'],
            'cabinet' => $data['cabinet'],
            'specialite' => $spec>0 ? $spec : NULL,
            'latitude' => $lat>0 ? $lat : NULL,
            'longitude' => $lng>0 ? $lng : NULL,
        ]);
    }
}
