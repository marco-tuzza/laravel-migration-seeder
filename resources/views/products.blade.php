<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prodotti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    //link al css non funziona ???
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <table class="table table-dark">
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