<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<ul>
    @foreach($infs as $inf)
        <li><?=$justInf; ?> is  {{ $inf->$justInf }}</li>
    @endforeach
</ul>
<a href="admin">Admin page</a>
</body>
</html>