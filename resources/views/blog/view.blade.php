@extends('layouts.blog')

@section('title')
{{$title}}
@stop


@section('content')
<h1>{{$title}}</h1>
<p>{{$content}}</p>
@stop