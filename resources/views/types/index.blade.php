<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
        @foreach($types as $type)
            <tr>
                <td> {{$type->id}}</td>
                <td> {{$type->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>
</html>