
@extends('layout')

@section('content')

<h1>Project </h1>

<h3>Title: {{$project->title}}</h3>
<p>Obsah: {{$project->description}}</p>

@if ($project->tasks->count())
<br>Tasky:

    @foreach ($project->tasks as $task)
        <div>
        <form method="POST" action="/tasks/{{$task->id}}">
        @method("PATCH")
        @csrf
                <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? "checked" : ""}}> Completed
                 - {{$task->body}}
        </form>
        </div>
    @endforeach

@endif


{{-- add new task --}}

<form class="box" method="POST" action="/project/{{ $project->id }}/tasks">
@csrf
    new task:<br>
    <input type="text" class="input" name="body">

    <button type="submit" class="button is-link">Add task</button>
</form>


@include('errors')

@endsection




