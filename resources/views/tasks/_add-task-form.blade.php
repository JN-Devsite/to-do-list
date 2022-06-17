<form action="/add" method="post">
    <x-form.input name="task" />
    @csrf
    <button type="submit" class="btn btn-primary btn-block">Add</button>
</form>
<x-flash />
