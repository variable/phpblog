@extends('base')

@section('body')
    @foreach ($articles as $article)
        <div class="row">
            <div class="col-md-1">
                <p>{{ $article->body }}</p>
            </div>
        </div>
    @endforeach
@endsection
