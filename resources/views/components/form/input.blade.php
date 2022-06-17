@props(['name', 'type' => 'text'])
<div class="form-group">
    <input type="text" class="form-control" name="{{ $name }}" placeholder="Insert task name" {{ $attributes(['value' => old($name)]) }} required>
</div>
<x-form.error name="task" />
