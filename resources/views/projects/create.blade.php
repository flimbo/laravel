<h1>create project1</h1>

<form method="POST" action="/project">
    @csrf
    <input type="text"  name="title" /><?php echo  $errors->has('title') ? 'chyba title' : ' ';?>
    <input type="text"  name="description" />
    {{ $errors->has('title') ? 'chyba desc' : ' '}} 
    <input type='submit' />
    
</form>

@foreach ($errors->all() as $error)

<br>Chyba: {{$error}}

@endforeach