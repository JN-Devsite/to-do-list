<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row mt-20 mb-60">
            <div class="col-md-12">
                <img src="{{ asset('images/logo.png') }}" class="logo" alt="MLP">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="task" placeholder="Insert task name">
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                </form>
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
        </div>
    </div>
</body>
</html>
