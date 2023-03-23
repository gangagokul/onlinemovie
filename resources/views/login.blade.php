<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header {
            padding: 60px;
            text-align: center;
            background-color:thistle;
            color: white;
            font-size: 30px;
        }
    </style>
</head>
<body>
<div class="header">
        <h2>LOGIN PAGE</h2>
    </div>
    <form action="/loginaction"method="post">
        @csrf
       <center> <h3>LOGIN PAGE</h3><BR>
        Username:<input type="text" id="name" name="username"><br><br>
        Password:<input type="password" id="password" name="password"><br><br>
        <input type="submit" value="login" name="login"></center>
    </form>
</body>
</body>
</html>