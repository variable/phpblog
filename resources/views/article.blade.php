@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
            <p><h2>{{ $article->title }}</h2></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>{{ $article->content }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>by {{ $article->user->name }}, at {{ $article->created_at }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
