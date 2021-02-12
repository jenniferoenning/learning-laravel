@extends('layouts.app')

@section('content')
<div class="container px-4">
    <div>
        <div>
            <img class="rounded-full" src="" id="avatarShow" alt="">
        </div>
        <div>
            <div>
                <div>{{ __('Registre-se') }}</div>

                <div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="name">{{ __('Nome') }}</label>

                            <div>
                                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="description">{{ __('Descrição') }}</label>

                            <div>
                                <input id="description" type="text" class="@error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="work">{{ __('Função') }}</label>

                            <div>
                                <select name="work" id="work" value="{{ old('work') }}">
                                    <option value="Full-Stack">Full Stack</option>
                                    <option value="front-end">Front-end</option>
                                    <option value="back-end">Back-end</option>
                                    <option value="Programador Junior">Programador Junior</option>
                                    <option value="Programador Pleno">Programador Pleno</option>
                                    <option value="Programador Senior">Programador Senior</option>
                                    <option value="Gestor de Projetos">Gestor de Projetos</option>
                                    <option value="Design">Design</option>
                                </select>
                                @error('work')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email">{{ __('Endereço de E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password">{{ __('Senha') }}</label>

                            <div>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password-confirm">{{ __('Confirme a senha') }}</label>

                            <div>
                                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div>
                            <label for="avatar">{{ __('Avatar') }}</label>
                            <div>
                                <input type="file" name="avatar" id="avatar" onchange="getImage(this);" required>
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit">
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
<script>
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