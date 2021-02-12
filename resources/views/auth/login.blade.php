@extends('layouts.app')

@section('content')
<div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div>
                <h3 class="text-3xl">{{ __('Login') }}</h3>
            </div>

            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mt-5">
                        <label for="email">{{ __('Endereço de E-mail') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror border-2 border-gray-300 rounded p-2 w-full" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="mt-5">
                        <label for="password">{{ __('Senha') }}</label>

                        <div>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror border-2 border-gray-300 rounded p-2 w-full" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-5">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Lembre-me') }}
                        </label>
                    </div>

                    <div class="mt-5">
                        <button class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700" type="submit">
                            {{ __('Logar') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link ml-3" href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua senha?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
