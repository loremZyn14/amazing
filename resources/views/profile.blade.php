<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>This is profile page of {{ $name }} {{ $age }}</h1>

    @foreach ($users1 as $usersdfs)
        <p>This is user {{ $usersdfs }}</p>
    @endforeach
</body>

</html>
