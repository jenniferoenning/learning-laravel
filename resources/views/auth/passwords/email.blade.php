@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div>
            <div>
                <div class="text-3xl my-4">{{ __('Redefinir senha') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email">{{ __('Endereço de e-mail') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror border-2 border-gray-300 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="my-4">
                            <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-purple-500 hover:bg-purple-400">
                                {{ __('Enviar link de redefinição de senha') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
