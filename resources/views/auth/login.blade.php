@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
      <b-col cols="8">
          <b-card title="Inicio de Sesión" class="my-1">

            @if($errors->any())
              <b-alert show variant="danger">
                Usuario o Contraseña incorrecto
              </b-alert>
            @else
              <b-alert show>
                Por favor ingresa sus datos!
              </b-alert>
            @endif

            <b-form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

                <b-form-group
                              label="Correo Electrónico"
                              label-for="email">
                  <b-form-input type="email"
                                id="email" name="email"
                                value="{{ old('email') }}" required autofocus
                                placeholder="">
                  </b-form-input>
                </b-form-group>

                <b-form-group
                              label="Contraseña"
                              label-for="password">
                  <b-form-input type="password"
                                id="password" name="password" required>
                  </b-form-input>
                </b-form-group>

                <b-form-group>
                  <b-form-checkbox
                    name="remember"
                    {{ old('remember') ? 'checked="true"' : '' }}>

                    Recordar sesion

                  </b-form-checkbox>
                </b-form-group>

                <b-button type="submit" variant="primary">
                  Ingresar
                </b-button>

                <b-button href="{{ route('password.request') }}" variant="link">Olvidaste tu contraseña</b-button>

            </b-form>
          </b-card>
      </b-col>
    </b-row>
</b-container>
@endsection
