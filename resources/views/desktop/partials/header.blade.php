<header>
    @if (Route::has('login'))
	<div class="mx-4 my-4 text-right">
		@auth
			<a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
			@else
			<a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
			@if (Route::has('register'))
			<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
			@endif
		@endauth
	</div>
	@endif
</header>