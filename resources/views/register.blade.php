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
            background-color: rgb(147,112,219);
            color: white;
            font-size: 30px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>REGISTER PAGE</h2>
    </div>
    <ul>
        <li><a class="active" href="indexpage">Home</a></li>
        <li><a href="login">Login</a></li>

    </ul>
    <center>
        @csrf
        <h1>Registration form</h1>
    </center>
    <center>
     <form action="/registeraction" method="post" id="form">
     @csrf
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
    </center>
</body>
</html>