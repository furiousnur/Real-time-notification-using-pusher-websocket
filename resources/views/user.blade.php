<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Improve Speed Performance Using Model Caching Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Laravel Improve Speed Performance Using Model Caching Tutorial With Example</h2><br/>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>email</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
