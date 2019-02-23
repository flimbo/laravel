@extends('layout')

@section('content')

<h1>Welcom in projects</h1>
<p>Totto je zoznam projectov</p>


@foreach ($projects as $p)
  
    #{{$p->id}} <a href='project/{{$p->id}}'>{{$p->title}}</a><br>
@endforeach



@endsection