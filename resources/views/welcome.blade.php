@extends('layout')

@section('content')

<h1>Welcome</h1>


@foreach ($task as $item)
    {{$item}}<br>
@endforeach

@foreach ($projects as $p)
  
    Title: {{$p->title}} alebo {{$p['title']}}<br>
@endforeach





@endsection