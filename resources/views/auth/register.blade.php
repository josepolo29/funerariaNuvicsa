@extends('layouts.app')

@section('content')

  <b-row align-h="center">
    <b-col cols="8">
      <b-card title="Inicio de Sesión" class="my-1">
        <b-alert show>
          Por favor ingresa sus datos!
        </b-alert>
        <b-form method="POST" action="{{ route('register') }}">
          @csrf
          <b-form-group
                        label="Nombre"
                        label-for="name">
            <b-form-input type="text"
                          id="name" name="name"
                          value="{{ old('name') }}" required autofocus>
            </b-form-input>
          </b-form-group>

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
                          id="password" name="password" required>
            </b-form-input>
          </b-form-group>

          <b-form-group
                        label="Confirmar contraseña"
                        label-for="password_confirmation">
            <b-form-input type="password"
                          id="password_confirmation" name="password_confirmation" required>
            </b-form-input>
          </b-form-group>

          <b-button type = "submit" variant="primary">
            Confirmar registro
          </b-button>

          <b-button href="{{ route('login') }}" variant="link">
            ¿Ya te has registrado?
          </b-button>

        </b-form>
      </b-card>
    </b-row>
</b-container>
@endsection
