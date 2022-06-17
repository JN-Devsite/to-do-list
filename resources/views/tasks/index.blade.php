<x-layout>
    <div class="col-md-4">
        @include('tasks._add-task-form')
    </div>

    <div class="col-md-8">
        <div class="panel panel-default px-10">

            <table class="table">
                <tr>
                    <td>#</td>
                    <td>Task</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                @forelse ($tasks as $key => $task)
                    <x-task-card :task="$task" />
                @empty

                @endforelse

            </table>

        </div>
    </div>
</x-layout>
