@extends('layouts.app')

@section('content')
<div class="xl:container mx-auto mt-10">
    <div class="grid grid-cols-3 gap-4">
        @foreach($users as $user)
            <div class="max-w-sm bg-white border-1 border-gray-300 p-6 rounded-md tracking-wide shadow-lg">
                <div id="header" class="flex items-center mb-4"> 
                    <img alt="avatar" class="w-20 rounded-full border-2 border-gray-300" src="{{$user->avatarImage}}" />
                    <div id="header-text" class="leading-5 ml-6 sm">
                        <h4 id="name" class="text-xl font-semibold">{{$user->name}}</h4>
                        <h5 id="job" class="font-semibold text-blue-600"><a href="{{ route('profile.show', $user->slug) }}">Ver mais... &raquo;</a></h5>
                    </div>
                </div>
                <div id="quote">
                    <q class="italic text-gray-600">{{$user->description}}</q>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


