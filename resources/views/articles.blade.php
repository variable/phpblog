@extends('layouts.app')

@section('content')
    @foreach ($articles as $article)
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                <p><h2>{{ link_to_route('article', $article->title, $parameters = ['slug'=>$article->slug]) }}</h2></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>{{ str_limit($article->content, 50) }}...</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>by {{ $article->user->name }}, at {{ $article->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
