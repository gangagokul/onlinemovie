<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
        font-family: Arial;
  margin: 0;
}
.header {
  padding: 60px;
  text-align: center;
  background-color:	rgb(165,42,42);
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
  <h5> ADMIN VIEWS PAGE</h5>
</div>
<ul>
  <li><a class="active" href="adminhome">HOME</a></li>
  <li><a href="adminviewbooking"> ADMIN VIEW BOOKING</a></li>
  <li><a href="adminlogout">LOGOUT</a></li>
</ul>
<center>
 <table border="1" cellpadding="3" cellspacing="5" width="20px" height="20px" >
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phoneno</th>
                <th>Password</th>
            </tr>
            @foreach($views as $value)
  <tr>
    <td>{{$value->name}}</td>
    <td>{{$value->username}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->gender}}</td>
    <td>{{$value->address}}</td>
    <td>{{$value->phoneno}}</td>
    <td>{{$value->password}}</td>
    </tr>
  @endforeach
  </center>
</table>
</body>
</html>