
<br><a href="demo"><button type="button" class="btn btn-success" id=''>Blog Module</button></a>
@extends('blog::layouts.master')

@section('content')
    <h1>Hello World Demo</h1>

    <p>
        This view is loaded from demo module: {!! config('blog.name') !!}
    </p>
@stop
