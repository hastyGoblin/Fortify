@extends('layouts.main')

@section('content')
    {{-- <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.navbar')
            </div>
        </div>
    </div> --}}
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div cl|ass="row">
                        <div class="col-xl-4 col-lg- col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card z-index-0 shadow-xl">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder text-center">Inicio de sesión</h4> <br>
                                    <p class="mb-0">Ingrese su correo electrónico y contraseña para iniciar sesión</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" aria-label="Email" placeholder="Correo" autocomplete="email" autofocus>
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" placeholder="Contraseña" autocomplete="new-password">
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Recordar</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Iniciar Sesión</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-1 text-sm mx-auto">
                                        ¿Olvidaste tu contraseña? Restablece tu contraseña 
                                        {{-- {{ route('auth.password.verify') }} --}}
                                        <a href="#" class="text-primary text-gradient font-weight-bold">aquí</a>
                                    </p>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        ¿No tienes una cuenta?
                                        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Inscribirse</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://s3.abcstatics.com/abc/www/multimedia/tecnologia/2023/04/03/ia-trabajos-Rjx38FR5WMqy1c4XHPQCkII-758x531@abc.jpg');
              background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"La tecnología es la nueva moneda"</h4>
                                <p class="text-white position-relative">Cuanto más fácil se vea el futuro, más esfuerzo puso la tecnología.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
