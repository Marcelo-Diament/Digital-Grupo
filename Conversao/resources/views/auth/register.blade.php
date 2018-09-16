 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                      {{ $errors}}
                        @csrf

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" autofocus>

                                @if ($errors->has('nome'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sobrenome" class="col-md-4 col-form-label text-md-right">{{ __('Sobrenome') }}</label>

                            <div class="col-md-6">
                                <input id="sobrenome" type="text" class="form-control{{ $errors->has('sobrenome') ? ' is-invalid' : '' }}" name="sobrenome" value="{{ old('sobrenome') }}"  autofocus>

                                @if ($errors->has('sobrenome'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sobrenome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>

                            <div class="col-md-6">
                                <input id="data_nascimento" type="date" class="form-control{{ $errors->has('data_nascimento') ? ' is-invalid' : '' }}" name="data_nascimento" value="{{ old('data_nascimento') }}"  autofocus>

                                 @if ($errors->has('data_nascimento'))
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('data_nascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" value="{{ old('telefone') }}"  autofocus>

                                @if ($errors->has('telefone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}"  autofocus>

                                @if ($errors->has('celular'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme sua Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        <div class="form-group row">
                          <label class='col-md-4 col-form-label text-md-right'>Gênero</label>
                          <div class="col-md-6">
                            <select class="form-control" name="genero">
                              <option value="null">Selecione seu gênero</option>
                              <option value="masculino">Masculino</option>
                              <option value="feminino">Feminino</option>
                              <option value="outro">Outro</option>
                            </select>
                          </div>

                          @if ($errors->has('genero'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('genero') }}</strong>
                              </span>
                          @endif
                        </div>

                         <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control" name="cpf" >
                            </div>

                            @if ($errors->has('cpf'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cpf') }}</strong>
                                </span>
                            @endif
                        </div>

                        <hr>

                        <h5>Endereçamento</h5>

                        <div class="form-group row">
                          <label for="endereco" class="col-md-4 col-form-label text-md-right">Endereço</label>

                          <div class="col-md-6">
                              <input id='endereco' type="text" class="form-control" name='endereco' >
                          </div>

                          @if ($errors->has('endereco'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('endereco') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group row">
                          <label for="numero" class="col-md-4 col-form-label text-md-right">Número</label>

                           <div class="col-md-6">
                              <input id='numero' type="number" class="form-control" name='numero' >
                          </div>

                          @if ($errors->has('numero'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('numero') }}</strong>
                              </span>
                          @endif
                        </div>


                        <div class="form-group row">
                          <label for="complemento" class="col-md-4 col-form-label text-md-right">Complemento</label>

                          <div class="col-md-6">
                              <input id='complemento' type="number" class="form-control" name='complemento'>
                          </div>

                          @if ($errors->has('complemento'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('complemento') }}</strong>
                              </span>
                          @endif
                        </div>

                       <div class="form-group row">
                          <label for="cep" class="col-md-4 col-form-label text-md-right">CEP</label>

                          <div class="col-md-6">
                              <input id='cep' type="number" class="form-control" name='cep' >
                          </div>

                          @if ($errors->has('cep'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('cep') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group row">
                          <label for="bairro" class="col-md-4 col-form-label text-md-right">Bairro</label>

                          <div class="col-md-6">
                              <input id='bairro' type="text" class="form-control" name='bairro' >
                          </div>

                          @if ($errors->has('bairro'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('bairro') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group row">
                          <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

                          <div class="col-md-6">
                          <select class="form-control" name="estado">
                            <option value="null">Selecione seu Estado</option>
                            @foreach ($estados as $estado)
                              <option value="{{$estado->id}}">{{$estado->title}}</option>
                            @endforeach
                          </select>
                        </div>

                        @if ($errors->has('estado'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('estado') }}</strong>
                            </span>
                        @endif
                        </div>

                        <div class="form-group row">
                          <label for="cidades" class="col-md-4 col-form-label text-md-right">Cidade</label>

                          <div class="col-md-6">
                          <select class="form-control" name="cidade">
                            <option value="null">Selecione sua Cidade</option>
                            @foreach ($cidades as $cidade)
                              <option value="{{$cidade->id}}">{{$cidade->title}}</option>
                            @endforeach
                          </select>
                        </div>

                        @if ($errors->has('cidade'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('cidade') }}</strong>
                            </span>
                        @endif
                      </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
