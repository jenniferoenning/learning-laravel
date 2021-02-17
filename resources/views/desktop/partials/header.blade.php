@if(Auth::check())
<header>
    <div class="relative bg-purple-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
          <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="{{ url('/') }}">
              <img width="50" src="{{asset('images/icon.svg')}}" alt="">
            </a>
          </div>
          <div class="-mr-2 -my-2 md:hidden">
            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Open menu</span>
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
          <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
            @guest
              @if (Route::has('login'))
                <a href="{{ route('login') }}" class="whitespace-nowrap text-base font-medium text-white">
                  {{ __('Login') }}
                </a>
              @endif
                        
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-purple-500 hover:bg-purple-400">
                  {{ __('Registre-se') }}
                </a>
              @endif
            @else
              <div class="group inline-block z-10">
                 <button
                    class="outline-none focus:outline-none border px-3 py-1 bg-white rounded-sm flex items-center min-w-32"
                    >
                    <span class="pr-1 flex-1 hover:text-gray-500">{{ Auth::user()->name }}</span>
                    <span>
                       <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
                 </button>
                 <ul class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
                    <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">{{ __('Deslogar') }}</a>
                    </li>
                    <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                       <a href="{{ route('profile.show', Auth::user()->slug) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Perfil</a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                          @csrf
                        </form>
                    </li>
                 </ul>
              </div>
            @endguest
          </div>
        </div>
      </div>
    </div>
</header>
@endif