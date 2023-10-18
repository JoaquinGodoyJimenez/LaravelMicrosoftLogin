<H1>All people</H1>
@foreach($persons as $p)
{{$p->name}}
<form action="{{ route('person.destroy', ['id' => $p->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<br>
@endforeach