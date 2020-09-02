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
        return Validator::make($data, [
            'nom' => ['required', 'string', 'min:2:', 'max:255'],
            'prenom' => ['required', 'string', 'min:2', 'max:255'],
            'wilayachoice' => ['required'],
            'communechoice' => ['required'],
            'adr' => ['required', 'string', 'min:10', 'max:255'],
            'phone' => ['required' ,'regex:/(0)[567][0-9]{8}/', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required'],
            'cabinet' => ['string', 'max:255'],
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
        $wilaya = Wilaya::select('CodeWilaya')->where('NomWilaya', $data['wilayachoice'])->get();
        $commune = Commune::select('id')->where('NomCommune', $data['communechoice'])->get();
        $spec = Specialite::select('id')->where('NomSpecialite', $data['specialitechoice'])->get();
        if ($data['role'] == 'Patient'){
            Patient::create([
                'NomPatient' => $data['nom'],
                'PrenomPatient' => $data['prenom'],
                'DateNaissance' => $data['dn'],
                'Telephone' => $data['phone'],
                'Wilaya' => $wilaya,
                'Commune' => $commune,
            ]);
        }else{
            Medecin::create([
                'NomMedecin' => $data['nom'],
                'PrenomMedecin' => $data['prenom'],
                'Adresse' => $data['adr'],
                'Cabinet' => $data['cabinet'],
                'Telephone' => $data['phone'],
                'Specialite' => $spec,
                'Wilaya' => $wilaya,
                'Commune' => $commune,
            ]);
        }
        return User::create([
            'name' => $data['prenom'],
            'phone' => $data['phone'],
            'user_type' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
