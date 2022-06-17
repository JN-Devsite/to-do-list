@props(['name'])

@error($name)
    <div class="alert alert-danger py-5">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        {{ $message }}
    </div>
@enderror
