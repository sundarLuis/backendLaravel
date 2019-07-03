<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>clientes</title>
</head>

<body>
    <form action="{{url('/oauth/clients')}}" method="POST">
        <P>
            <input type="text" name="name" id="">
        </P>
        <P>
            <input type="text" name="redirect" id="">
        </P>
        <P>
            <input type="submit" name="sent" value="Enviar">
        </P>
        {{ csrf_field() }}
    </form>
    <!-- {{ $clients }} -->
    <table border="1">
        <body>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Redirect</td>
                <td>Secret</td>
            </tr>
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->redirect}}</td>
                    <td>{{$client->secret}}</td>
                </tr>
            @endforeach
        </body>
    </table>
</body>

</html>