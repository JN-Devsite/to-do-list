@if (session()->has('msg'))
    <div class="alert alert-success mt-10 py-5">
        <p>{{ session()->get('msg') }}</p>
    </div>
@endif
