@extends('layouts.app')

@section('content')
<div class="container my-5">
	<div class="content-create-post">
		<div class="card p-5">
			<form method="POST" action="{{ route('store.post') }}" enctype="multipart/form-data">
				@csrf
				<div class="row">
		            <div class="form-group col-sm">
		            	<div class="mt-3">
			                <label for="caption" class="col-form-label">{{ __('Descrição do post') }}</label>
			                <input id="caption"
									type="text" 
									class="form-control @error('caption') is-invalid @enderror" 
									name="caption" 
									value="{{ old('caption') }}" 
									required autocomplete="caption" placeholder="Descrição do post" autofocus>

			                @error('caption')
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                @enderror
			            </div>
			            <div class="custom-file mt-3 " style="cursor: pointer;">
							<input type="file" class="custom-file-input" id="image" onchange="getImage(this);" name="image">
							<label for="image" class="custom-file-label" for="image">{{ __('Imagem Destaque') }}</label>
							@error('image')
				                <span class="invalid-feedback" role="alert">
				                    <strong>{{ $message }}</strong>
				                </span>
				            @enderror
				            <div class="my-3">
			            		<img class="img-fluid" id="avatarShow" src="" alt="">
			            	</div>
							<button class="btn btn-primary">
								Adicionar novo post
							</button>
						</div>
		            </div>
				</div>
			</form>
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
            .width('25%')
            .height('25%');
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
@endpush