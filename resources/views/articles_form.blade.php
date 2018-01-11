@extends('base')

@section('body')
       <div class="row">
            <div class="col-md-12">
                {{ Form::open(array('route' => 'create')) }}
                    {{ Form::token() }}
                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title') }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('content', 'Content') }}
                        {{ Form::textarea('content', '', $attributes=["class"=>"form-control"]) }}
                    </div>
                    {{ Form::submit('Create') }}
                {{ Form::close() }}
            </div>
        </div>
@endsection
