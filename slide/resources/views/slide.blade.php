<!DOCTYPE html>
<html>
<head>
    <title>Minha Página</title>
</head>
<body>
    <h1>Minha Página</h1>

    <ul>
        @foreach ($itens as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>
