<H1>New person</H1>
<form method="POST" action="{{ route('person.store') }}">
    @csrf    
    <label>ID</label>
    <input class="form-control" type="text" placeholder="ID" id="id" name="id">
    <br><br>
    <label>Name</label>
    <input class="form-control" type="text" placeholder="Name" id="name" name="name">
    <br><br>
    <button class="btn" type="submit">Create</button>
</form>