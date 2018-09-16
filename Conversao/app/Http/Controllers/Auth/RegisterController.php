<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\City;
use App\State;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    public function showRegister(){
      $cidades = City::all();
      $estados = State::all();
      return view('auth.register')->with('cidades',$cidades)->with('estados',$estados);
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
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'data_nascimento' => 'required',
            'telefone' => 'required|min:8|numeric',
            'celular' => 'required|min:8|numeric',
            'cpf' => 'required|min:11|numeric',
            'genero' => 'required',
            'endereco' => 'required|string|min:5',
            'numero' => 'required|numeric|max:99999',
            'complemento' => 'max:999',
            'bairro' => 'required|string',
            'cep' => 'required|numeric|min:8',
            'cidade' => 'required',
            'estado' => 'required',
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
        return User::create([
            'nome' => $data['nome'],
            'sobrenome' => $data['sobrenome'],
            'data_nascimento' => $data['data_nascimento'],
            'telefone' => $data['telefone'],
            'celular' => $data['celular'],
            'email' => $data['email'],
            'senha' => Hash::make($data['password']),
            'genero' => $data['genero'],
            'cpf' => $data['cpf'],
            'endereco' => $data['endereco'],
            'numero' => $data['numero'],
            'complemento' => $data['complemento'],
            'bairro' => $data['bairro'],
            'CEP' => $data['cep'],
            'cidades_fk' => $data['cidade'],
            'ufs_fk' => $data['estado'],
        ]);
    }
}
