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
  background-color:rgb(144,238,144);
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
  <h5>VIEW PROFILE PAGE</h5>
</div>
<ul>
  <li><a class="active" href="userhome">HOME</a></li>
  <li><a href="booking">BOOKING</a></li>
  <li><a href="viewbooking">VIEW BOOKING</a></li>
  <li><a href="logout">LOGOUT</a></li>
</ul><br><br>
<center>
<table border="1" cellpadding="3" cellspacing="5" width="20px" height="20px" bgcolor="olive">
  <tr>
    <td>Name</td>
    <td>Username</td>
    <td>Email</td>
    <td>Gender</td>
    <td>Address</td> 
    <td>Phoneno</td> 
    <td>Password</td>
  </tr>
  @foreach($profile as $value)
  <tr>
    <td>{{$value->name}}</td>
    <td>{{$value->username}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->gender}}</td>
    <td>{{$value->address}}</td>
    <td>{{$value->phoneno}}</td>
    <td>{{$value->password}}</td>
    <td><a href="/edit1/{{$value->id}}">edit</a></td>
  </tr>
  @endforeach
  </center>

</table>
</body>
</html>