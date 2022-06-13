<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
</head>
<body>
    <h1>Companies</h1>
    <hr>
    <p>
    {{ number_format(count($models),2,'','.')." registros" }}
    <table>
    @foreach($models as $model)
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->name }}</td>
        <td>{{ $model->fantasy_name }}</td>
        <td>{{ $model->address }}</td>
        <td>{{ $model->neighborhood }}</td>
        <td>{{ $model->number }}</td>
        <td>{{ $model->phone }}</td>
        <td>{{ $model->email }}</td>
    </tr>
    @endforeach
    </table>
    </p>
</body>
</html>