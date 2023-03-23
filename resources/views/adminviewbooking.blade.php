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
  background-color:	rgb(0,139,139);
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
  <h5> ADMIN VIEW BOOKING PAGE</h5>
</div>
<ul>
  <li><a class="active" href="adminhome">HOME</a></li>
  <li><a href="adminviews"> ADMIN VIEWS</a></li>
  <li><a href="adminlogout">LOGOUT</a></li>
</ul><br>
<center>
<table border="1" cellpadding="3" cellspacing="5" width="20px" height="20px" bgcolor="skyblue">
  <tr>
    <td>Movie Name</td>
    <td>Date</td>
    <td>Time</td>
    <td>Theater Name</td>
    <td>Seat Type</td>
    <td>No of Seats</td> 
    <td>User Id</td> 
    <td>Status</td> 
  </tr>
  @foreach($res as $value)
        <tr>
      <td>{{$value->moviename}}</td>
      <td>{{$value->date}}</td>
      <td>{{$value->time}}</td>
      <td>{{$value->theatername}}</td>
      <td>{{$value->seattype}}</td>
      <td>{{$value->noofseats}}</td>
      <td>{{$value->userid}}</td>
      <td>{{$value->status}}</td>
      <td><a href="/confirm/{{$value->id}}">confirm</a></td>
      <td><a href="/decline/{{$value->id}}">decline</a></td>
        </tr>
        @endforeach
 
  </center>
  </table>
</body>
</html>