@extends('layouts.app')

@section('content')
<div class="container marketing">
    <div class="row">
        @foreach($users as $user)
            <div class="col-lg-4 mt-5 text-center">
                <img class="rounded-circle" src="{{$user->avatarImage}}" alt="Generic placeholder image" width="140" height="140">
                <h2>{{$user->name}}</h2>
                <p>{{$user->description}}</p>
                <p><a class="btn btn-secondary" href="/perfil" role="button">Ver mais... &raquo;</a></p>
            </div>
        @endforeach
    </div>
</div>
@endsection