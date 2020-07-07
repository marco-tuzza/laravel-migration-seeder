<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome del prodotto</th>
                <th>Prezzo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lista_prodotti as $prodotto)
            <tr>
                <td>{{$prodotto->id}}</td>
                <td>{{$prodotto->name}}</td>
                <td>€ {{$prodotto->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>