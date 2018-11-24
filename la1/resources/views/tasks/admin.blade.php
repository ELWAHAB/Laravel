<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<ul>
    @foreach($names as $name)
        <li>
            <a href="admin/{{$name->id}}">{{ $name->body }}</a> and his time is {{$name->times}}
        </li>
    @endforeach
</ul>
Now : {{$seconds}} seconds

<ul>
    <a href="home"> Home</a>
    <br/>
    <a href="welcome"> Welcome</a>
    <br/>
    <a href="admin/1">Admin/1</a>
</ul>
</body>
</html>



