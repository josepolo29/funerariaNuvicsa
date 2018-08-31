@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
      <b-col cols="8">
          <b-card title="Inicio de Sesión">
            <b-alert show>
              Por favor ingresa sus datos!
            </b-alert>
            <b-form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

                <b-form-group
                              label="Correo Electrónico"
                              label-for="email"
                              description="Tu correo esta seguro con nosotros.">
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
                                id="password" name="password"
                                value="{{ old('password') }}" required>
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
