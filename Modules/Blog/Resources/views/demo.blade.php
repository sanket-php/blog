@extends('blog::layouts.master')

@section('content')
    <h1>Hello World Demo</h1>

    <p>
        This view is loaded from demo module: {!! config('blog.name') !!}
    </p>
@stop
