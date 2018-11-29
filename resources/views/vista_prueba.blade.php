<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
    </head>
    <body>
        <div>
            <form action="{{ route('Hola') }}" method="post">
                <input type="text" name="name" />
                <input type="text" name="correo" />
                <input type="password" name="contraseña" />
                <input type="date" name="hola" />
                <input type="submit" name="enviar" value="enviar" /> @csrf
            </form>
            <table style="width:100%">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>e-mail</th>
                    <th>delete</th>
                </tr>
                @foreach ($datos as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('borrar', ['id' =>  $user->id ]) }}"
                            >borrar</a
                        >
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
