@extends('layouts.blog')

@section('title')
Create Blog Page
@stop




@section('content')
<form role="form" action="/articles" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="content">Content:</label>
    <textarea class="form-control" id="content" name="content" rows="4"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop
