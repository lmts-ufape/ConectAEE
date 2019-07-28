@extends('layouts.principal')
@section('title','Entrar')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Login</div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('username') || $errors->has('email') ? ' has-error' : '' }}">
              <label for="login" class="col-md-4 control-label">Nome de Usuário ou Email <font color="red">*</font> </label>

              <div class="col-md-6">
                <input id="login" type="text" class="form-control" name="login" value="{{ old('username') ?: old('email') }}" required autofocus>

                @if ($errors->has('username') || $errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Senha <font color="red">*</font> </label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar nome de usuário e senha
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Entrar
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                  Esqueceu sua senha?
                </a>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
