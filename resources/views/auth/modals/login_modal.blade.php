<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">{{ __('Login') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="f_login" action="{{ route('login') }}" method="post">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="email-id" class="col-form-label">{{ __('Email') }}:</label>
                    {{--<input type="text" name="email" id="email-id" class="form-control" oninput="verificarEmailOK();">--}}
                    <input id="email-id" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pass-id" class="col-form-label">Contraseña:</label>
                    {{--<input type="password" name="pass" id="pass-id" class="form-control">--}}
                    <input id="pass-id" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-right">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recuérdame') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        @if (Route::has('register'))
                            {{--<a class="btn btn-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>--}}
                            <a class="btn btn-link" data-dismiss="modal" data-toggle="modal" href="#registerModal">{{ __('Registrarse') }}</a>
                        @endif
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('¿Olvido de contraseña?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="input-group-btn">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id="btn_ini_sesion">Iniciar sesión</button>
                </span>
            </div>
            </form>
        </div>
    </div>
</div>
