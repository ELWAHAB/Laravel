<!DOCTYPE html>
<html>
<head>
    <title>SHOW</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }

        .urls {
            text-align: right;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title"> <?=$task->body ?> </div>
    </div>


</div>

<div class="urls">
    <a href="..\admin"> Admin Page</a>
</div>
</body>
</html>

