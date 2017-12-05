@extends('layouts.app')
@section('title-logs', 'Login - Portifólio')
@section('log-forms')
<form class="form-signin" method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}
  <h2 class="form-signin-heading">Login</h2>
  {{ $errors->has('email') ? ' has-error' : '' }}
  <label for="inputEmail" class="sr-only">E-mail</label>
  <input type="email" id="inputEmail" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
  @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
  @endif

  {{ $errors->has('password') ? ' has-error' : '' }}
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Senha" required>
  @if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
  @endif

  <div class="checkbox">
    <label>
      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-se de mim
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <a class="btn btn-link" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
</form>
@endsection
