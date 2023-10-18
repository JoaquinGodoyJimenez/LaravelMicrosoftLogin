<H1>Editar producto:</H1>
<form method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
    @csrf
    @method('PATCH')
    <input type="hidden" name="id" value="{{ $product->id }}">
    <label>Nombre del producto</label>
    <input class="form-control" type="text" placeholder="Nombre" id="name" name="name" value="{{ $product->name }}">
    <button class="btn" type="submit">Editar</button>
</form>