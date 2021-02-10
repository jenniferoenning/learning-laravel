@extends('layouts.app')

@section('content')
<div class="container my-5">
	<div class="content-create-post">
		<form action="">
			<div class="row">
				<div class="col-md-5">
		            <div class="form-group">
		                <label for="caption" class="col-form-label">{{ __('Descrição do post') }}</label>
		                <input id="caption"
								type="text" 
								class="form-control @error('caption') is-invalid @enderror" 
								name="caption" 
								value="{{ old('caption') }}" 
								required autocomplete="caption" autofocus>

		                @error('caption')
		                    <span class="invalid-feedback" role="alert">
		                        <strong>{{ $message }}</strong>
		                    </span>
		                @enderror
		            </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<label for="image" class="col-form-label">{{ __('Imagem') }}</label>

					<input type="file" class="form-control-file" id="image" name="image">

					@error('image')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>
			</div>
			<div class="row mt-4">
				<div class="col-md-5">
					<button class="btn btn-primary">
						Adicionar novo post
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection