@extends('layouts.guess.master-without-nav')

@section('title')
    Iniciar Sessión
@endsection

@section('css')

@endsection

@section('header')

@endsection

@section('body')
  
    <body>
        
@endsection

@section('content')

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Bienvenido de nuevo!</h5>
                                            <p>Inicia sesión para continuar.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="p-2 mt-3">
                                    <form class="form-horizontal" action="index">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Correo Electronico</label>
                                            <input type="text" class="form-control" id="username" placeholder="gedem@ejemplo.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Contraseña</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" placeholder="***********" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">Recordarme</label>
                                        </div>
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Iniciar sesión</button>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw" class="text-muted"><i class="mdi mdi-lock me-1"></i> ¿Olvidaste tu contraseña?</a>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection

@section('script')
    <script type="text/javascript">

    </script>
@endsection
