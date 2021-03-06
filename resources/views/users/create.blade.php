@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Usuarios',
'activePage' => 'Usuarios',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Gestión de usuario') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}" class="btn btn-primary btn-round">{{ __('Volver') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('user.store') }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">{{ __('Información del usuario') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">

                                {{-- Nombre --}}
                                <div class="col-sm-3 form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" id="input-name"
                                        class="col-sm-12 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Nombre') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                {{-- Apellido --}}
                                <div class="col-sm-3 form-group{{ $errors->has('lastName') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-lastName">{{ __('Apellido') }}</label>
                                    <input type="text" lastName="lastName" id="input-lastName"
                                        class="col-sm-12 form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Apellido') }}" required>

                                    @include('alerts.feedback', ['field' => 'lastName'])
                                </div>


                                {{-- Correo electrónico --}}
                                <div class="col-sm-3 form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email"
                                        class="col-sm-12 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>

                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>

                            </div>





                            {{-- Contraseña --}}
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">{{ __('Contraseña') }}</label>
                                <input type="password" name="password" id="input-password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Contraseña') }}" value="" required>

                                @include('alerts.feedback', ['field' => 'password'])
                            </div>

                            {{-- Confirmar contraseña --}}
                            <div class="form-group">
                                <label class="form-control-label"
                                    for="input-password-confirmation">{{ __('Confirmar contraseña') }}</label>
                                <input type="password" name="password_confirmation" id="input-password-confirmation"
                                    class="form-control" placeholder="{{ __('Confirmar contraseña') }}" value=""
                                    required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
