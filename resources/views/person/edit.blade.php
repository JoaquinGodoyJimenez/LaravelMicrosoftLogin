<H1>Edit person:</H1>
<form method="POST" action="{{ route('person.update', ['id' => $person->id]) }}">
    @csrf
    @method('PATCH')
    <input type="hidden" name="id" value="{{ $person->id }}">
    <label>Name</label>
    <input class="form-control" type="text" placeholder="Name" id="name" name="name" value="{{ $person->name }}">
    <br>
    <button class="btn" type="submit">Edit</button>
</form>