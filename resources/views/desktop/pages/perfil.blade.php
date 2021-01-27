@extends('layouts.app')

@section('content')
<div class="container marketing my-5">
    <div class="row">
        <div class="col-md-3">
        	<img class="rounded-circle" width="200" height="200" src="{{ $user->avatarImage }}" alt="">
        </div>
        <div class="col-md-9">
			<div class="card">
				<h5 class="card-header text-dark font-weight-bold">{{ $user->name }}</h5>
				<div class="card-body">
					<h5 class="card-title">Descrição: {{ $user->description }}</h5>
					<span class="card-text">E-mail: {{ $user->email }}</p>
					<span class="card-text">Função: {{ $user->work }}</span>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection