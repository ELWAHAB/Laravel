<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul>
   <?/*= $name;  */?>
</body>
</html>