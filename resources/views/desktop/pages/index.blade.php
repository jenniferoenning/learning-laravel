@extends('layouts.app')

@section('content')
<div class="container marketing">
    <div class="row">
        @for ($i = 0; $i <= 11; $i++)
            <div class="col-lg-4 mt-5 text-center">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Ver mais... &raquo;</a></p>
            </div>
        @endfor
    </div>
</div>
@endsection