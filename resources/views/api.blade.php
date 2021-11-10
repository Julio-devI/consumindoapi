<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <table style="border: 2px solid black">
                <tr>
                  <th>name</th>
                </tr>
                
                @foreach ($names as $name) 
                    <tr>
                        <td>{{$name->name}}</td>
                    </tr>
                @endforeach    
        </table>
    </div>
</body>
</html>