@extends('layouts.app')

@section('content')
<div class="container marketing my-5">
    <div class="row">
        <div class="col-md-3">
        	<img class="rounded-circle" width="200" height="200" src="{{ $user->avatarImage }}" alt="">
        </div>
        <div class="col-md-9">
			<div class="d-flex justify-content-between align-items-baseline">
				<h5 class="text-dark font-weight-bold">{{ $user->name }}</h5>
				@if($userAuth->slug == $user->slug)
				<a href="{{ route('create.post') }}">Adicionar um novo post</a>
				@endif
			</div>
			<div>
				<h5 class="card-title">Descrição: {{ $user->description }}</h5>
				<span class="card-text">E-mail: {{ $user->email }}</p>
				<span class="card-text">Função: {{ $user->work }}</span>
			</div>
        </div>
    </div>
    <div class="row my-5">
    	@foreach($user->posts as $post)
    		<div class="col-4">
    			<img src="/storage/{{ $post->image }}" alt="" class="w-100">
    		</div>
    	@endforeach
    </div>
</div>
@endsection