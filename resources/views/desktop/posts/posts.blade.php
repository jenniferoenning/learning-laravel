@extends('layouts.app')

@section('content')
<div class="xl:container mx-auto my-5">
  <div class="lg:flex lg:items-center lg:justify-between">
    <div class="flex-1 min-w-0">
      <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
        Lista de posts
      </h2>
      <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
        <div class="mt-2 flex items-center text-sm text-gray-500">
          <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
          </svg>
          @if($user->posts->isNotEmpty())
            Último post dia {{ $user->posts[0]->created_at->format('d/m/Y') }}
          @else 
            Nenhum post
          @endif
        </div>
      </div>
    </div>
    <div class="mt-5 flex lg:mt-0 lg:ml-4">
      <span class="ml-3 relative sm:hidden">
        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="mobile-menu" aria-haspopup="true">
          More
          <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div class="origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" aria-labelledby="mobile-menu" role="menu">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Edit</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">View</a>
        </div>
      </span>
    </div>
  </div>
  <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
    <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
      <div class="mb-4">
          <h1 class="text-grey-darkest">Search</h1>
          <div class="flex mt-4">
              <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker focus:outline-none " placeholder="Digite o que você procura">
              <button class="flex-no-shrink p-2 border-2 rounded text-teal border-none bg-purple-600 text-white hover:bg-teal cursor-pointer focus:outline-none">Search</button>
          </div>
      </div>
      <div>
        @if($user->posts->isNotEmpty())
          @foreach($user->posts->reverse() as $post)
            <div class="flex mb-4 items-center">
                <p class="w-full text-green">{{ $post->caption }}</p>
                <span class="hidden sm:block">
                  <button type="button" class="inline-flex items-center px-4 py-2 border border-green-500 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="-ml-1 mr-2 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                    <span class="text-green-500"><a href="/posts/{{ $post->id }}/edit">Edit</a></span>
                  </button>
                </span>
                <span class="ml-3 hidden sm:block">
                  <button type="button" class="inline-flex items-center px-4 py-2 border border-red-500  rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none">
                    <svg class="mr-1 text-red-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                    <span class="text-red-500">Trash</span>
                  </button>
                </span>
            </div>
          @endforeach
        @else 
            <div>
                <h2>Nenhum post</h2>
            </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection