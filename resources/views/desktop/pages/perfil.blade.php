@extends('layouts.app')

@section('content')
<div class="xl:container mx-auto mt-10">
    <div class="flex">
    	<img class="rounded-full mr-6" width="200" height="200" src="{{ $user->avatarImage }}" alt="">
		<div>
            <div>
    			<h5 class="font-bold text-lg">{{ $user->name }}</h5>
    			@if($userAuth->slug == $user->slug)
    			<a class="text-blue-600 hover:text-blue-400" href="{{ route('create.post') }}">Adicionar um novo post</a>
    			@endif
            </div>
			<h5>Descrição: {{ $user->description }}</h5>
			<span>E-mail: {{ $user->email }}</p>
			<span>Função: {{ $user->work }}</span>
		</div>
    </div>
    <div class="flex flex-wrap mt-10">
    	@foreach($user->posts as $post)
    		<div class="mx-5 my-3">
    			<img width="200" height="200" src="/storage/{{ $post->image }}" alt="" style="width: 400px; height: 400px; object-fit: cover;">
    		</div>
    	@endforeach
    </div>
</div>
@endsection