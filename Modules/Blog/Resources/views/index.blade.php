
<br><a href=<?php echo Request::url()?>/demo><button type="button" class="btn btn-success" id=''>Contact Us</button></a>
@extends('blog::layouts.master')
<br>
<?php
  echo Request::url()
?>
@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
@stop
