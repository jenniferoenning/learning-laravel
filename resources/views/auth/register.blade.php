@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-purple-600">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="flex justify-between">
            <h3 class="text-3xl">{{ __('Registre-se') }}</h3>
              @if (Route::has('login'))
                <a href="{{ route('login') }}" class="text-base font-medium text-purple-600 self-center hover:text-purple-500">
                  {{ __('Login') }}
                </a>
              @endif
        </div>
        <div class="flex">
            <div class="py-1 items-center mx-auto">
                <div class="bg-white px-4 py-5 rounded-lg shadow-lg text-center w-48">
                    <div class="mb-4">
                        <img class="w-auto mx-auto rounded-full object-cover object-center" id="avatarShow" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" />
                    </div>
                    <label class="cursor-pointer mt-6">
                        <span class="mt-2 text-base leading-normal px-4 py-2 bg-purple-500 hover:bg-purple-400 text-white text-sm rounded-full" >Select Avatar</span>
                        <input type="file" name="avatar" id="avatar" onchange="getImage(this);" required class="hidden" :multiple="multiple" :accept="accept" />
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div>

                <div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-3">
                            <label for="name">{{ __('Nome') }}</label>

                            <div>
                                <input id="name" type="text" class="@error('name') is-invalid @enderror border-2 border-gray-300 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="description">{{ __('Descrição') }}</label>

                            <div>
                                <input id="description" type="text" class="@error('description') is-invalid @enderror border-2 border-gray-300 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="work">{{ __('Função') }}</label>

                            <div>
                                <select class="px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-purple-500 focus:outline-none focus:ring focus:border-blue-300" name="work" id="work" value="{{ old('work') }}">
                                    <option class="p-3" value="Full-Stack">Full Stack</option>
                                    <option class="p-3" value="front-end">Front-end</option>
                                    <option class="p-3" value="back-end">Back-end</option>
                                    <option class="p-3" value="Programador Junior">Programador Junior</option>
                                    <option class="p-3" value="Programador Pleno">Programador Pleno</option>
                                    <option class="p-3" value="Programador Senior">Programador Senior</option>
                                    <option class="p-3" value="Gestor de Projetos">Gestor de Projetos</option>
                                    <option class="p-3" value="Design">Design</option>
                                </select>
                                @error('work')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="email">{{ __('Endereço de E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror border-2 border-gray-300 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="password">{{ __('Senha') }}</label>

                            <div>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror border-2 border-gray-300 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="password-confirm">{{ __('Confirme a senha') }}</label>

                            <div>
                                <input class="border-2 border-gray-300 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> 

                        <div class="mt-3">
                            <div>
                                <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-purple-500 hover:bg-purple-400" type="submit">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    function getImage(input) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#avatarShow')
            .attr('src', e.target.result)
            .width(140)
            .height(140);
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
@endpush