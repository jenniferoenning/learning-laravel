@extends('layouts.app')

@section('content')
<div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-purple-600">
        <div class="flex justify-content-center">
            <a href="{{ url('/') }}">
              <img class="rounded-full shadow-md" width="120" src="{{asset('images/icon.svg')}}" alt="">
            </a>
        </div>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-between">
                <h3 class="text-3xl">{{ __('Login') }}</h3>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-base font-medium text-purple-600 self-center hover:text-purple-500">
                      {{ __('Registre-se') }}
                    </a>
                  @endif
            </div>

            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="my-5">
                        <label for="email">{{ __('Endereço de E-mail') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror border-2 border-gray-200 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="my-5">
                        <label for="password">{{ __('Senha') }}</label>

                        <div>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror border-2 border-gray-200 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="my-5">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Lembre-me') }}
                        </label>
                    </div>

                    <div class="my-5">
                        <button class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-purple-500 hover:bg-purple-400 focus:outline-none focus:ring focus:border-blue-300" type="submit">
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
