@extends('layouts.app')

@section('content')

<div class="card">
    <header class="card-header">
      <p class="card-header-title">
        {{ __('Reset Password') }}
      </p>
    </header>
    <div class="card-content">
      <div class="content">
            
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
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
                <div class="control">
                    <button type="submit" class="button is-success">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>
        
      </div>
    </div>
  </div>

@endsection
