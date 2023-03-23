<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
@foreach($result as $value)
<form action="/updatedaction/{{$value->id}}" method="post">
@csrf
<h1>Registration form</h1>
<table cellpadding="5">
            <table cellpadding="5">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td><input type="email"  name="email" id="email"></td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td>Male<input type="radio" name="gender" value="male">
                        Female<input type="radio" name="gender" value="female"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea name="address" id="address"></textarea></td>
                </tr>
                <tr>
                    <td>PhoneNo:</td>
                    <td><input type="number" name="phoneno" id="phoneno"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="register" id="reg"></td>
                </tr>
            </table>
        </form>
        @endforeach
    </center>
</body>
</html>