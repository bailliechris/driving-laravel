@extends('layouts.app')

@section('content')

<div class="card">
    <header class="card-header">
      <p class="card-header-title">
        {{ __('Login') }}
      </p>
    </header>
    <div class="card-content">
      <div class="content">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="field">
                <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                <div class="control">
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="password" class="label">{{ __('Password') }}</label>

                <div class="control">
                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" value={{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                      </label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-success">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="button" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
      </div>
    </div>
</div>

@endsection
