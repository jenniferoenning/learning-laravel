@extends('layouts.app')

@section('content')
<div class="xl:container mx-auto mt-10">
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-purple-600 shadow-md overflow-hidden sm:rounded-lg">
      <div class="card p-5">
        <form method="POST" action="/posts/{{ $post->id }}/edit" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="row">
            <div class="form-group col-sm">
              <div class="mt-3">
                <div class="flex justify-center">
                    <img class="shadow-sm rounded my-7 w-50 text-white" src="/storage/{{ $post->image }}" id="avatarShow" alt="">
                </div>
                  <h1 class="text-2xl font-bold text-white">Editar post</h1>
                  <div class="mt-5">
                    <label for="caption" class="col-form-label text-white">{{ __('Descrição do post') }}</label>
                    <input id="caption"
                      type="text" 
                      class="form-control @error('caption') is-invalid @enderror border-2 border-gray-300 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300 " 
                      name="caption" 
                      value="{{ $post->caption }}" 
                      required autocomplete="caption" placeholder="Descrição do post" autofocus>
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div> 
               </div>
               <div class="custom-file mt-3 " style="cursor: pointer;">
                <label for="image" class="custom-file-label text-white" for="image">{{ __('Imagem Destaque') }}</label>
                <input type="file" class="custom-file-input border-2 border-purple-500 rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300 text-white" id="image" onchange="getImage(this);" name="image">
                @error('image')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <button class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-purple-600 bg-white focus:outline-none focus:ring mt-5">
                  <a href="">Editar post</a>
                </button>
                <button class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-purple-600 bg-white focus:outline-none focus:ring mt-5">
                  <a href="{{ route('show.posts') }}">Cancelar</a>
                </button>
              </div>
            </div>
          </div>
        </form>
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
            .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
@endpush