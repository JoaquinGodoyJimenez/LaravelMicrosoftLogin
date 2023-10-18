<H1>Nuevo producto</H1>
<form method="POST" action="{{ route('product.store') }}">
    @csrf    
    <label>Nombre del producto</label>
    <input class="form-control" type="text" placeholder="Nombre" id="name" name="name">
    <button class="btn" type="submit">Crear</button>
</form>