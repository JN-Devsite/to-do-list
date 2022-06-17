@props(['task'])
<tr>
    <td>1</td>
    <td {!! $task->complete ? 'class="completed"' : '' !!}>{{ $task->task }}</td>
    <td>
        <form action="/complete/{{ $task->id }}" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" name="complete" value="{{ $task->complete ? 0 : 1 }}">

            @if(! $task->complete)
                <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
            @endif
        </form>
    </td>
    <td>
        @if(! $task->complete)
            <form action="/delete/{{ $task->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            </form>
        @endif
    </td>
</tr>
