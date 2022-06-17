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
                    <td>A</td>
                    <td>B</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Built based on client specification</td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Built based on client specification</td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </form>
                    </td>
                </tr>

            </table>

        </div>
    </div>
</x-layout>
