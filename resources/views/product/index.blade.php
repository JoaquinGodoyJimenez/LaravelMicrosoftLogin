<H1>Lista de productos</H1>
@foreach($products as $p)
{{$p->name}}
<form action="{{ route('product.destroy', ['id' => $p->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>

<br>
@endforeach