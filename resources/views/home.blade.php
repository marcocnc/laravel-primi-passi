<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel primi passi</title>
</head>
<body>
    <h1>Welcome</h1>
    <h2>{{ $name }} {{ $lastname }}</h2>

    <ul>
        @foreach($users as $user)
            <li>
                {{$user}}
            </li>
        @endforeach
    </ul>

    @if (in_array('Andrea Convertini', $users))
    <p>
        <strong> Andrea Convertini è presente</strong>
    </p>
    @else
        <p>
            <strong> Andrea Convertini non è presente nella lista</strong>
        </p>
    @endif

</body>
</html>
