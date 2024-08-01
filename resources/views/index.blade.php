<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Task Name</th>
                <th>Status</th>
                <th>Description</th>
                <th>Deadline</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->task_name }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->deadline }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
    
</body>
</html>