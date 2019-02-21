Edit project

<form method="POST" action="/project/{{$project->id}}">
    @csrf
    @method('PATCH')
    <!--
{{csrf_field()}}
    {{method_field('PATCH')}}
    -->


        <input type="text"  name="title" value="{{$project->title}}" />
<input type="text"  name="description" value="{{$project->description}}"/>
<input type='submit' />
</form>
