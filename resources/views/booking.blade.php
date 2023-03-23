<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
      body {
        font-family: Arial;
  margin: 0;
}
.header {
  padding: 60px;
  text-align: center;
  background-color:	rgb(186,85,211);
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
  <h4>BOOKING PAGE</h4>
</div>
<ul>
  <li><a class="active" href="userhome">HOME</a></li>
  <li><a href="viewbooking">VIEW BOOKING</a></li>
  <li><a href="viewprofile">VIEW PROFILE</a></li>
  <li><a href="logout">LOGOUT</a></li>
</ul>
<CENTER>
<form action="/bookingaction" method="post">
  @csrf
  <H5>REGISTRATION FORM</H5><BR>
  <table cellpadding="5">
                <tr>
                    <td>Movie Name:</td>
                    <td><input type="text" name="moviename" id="moviename"></td>
                </tr>

                <tr>
                    <td>Date:</td>
                    <td><input type="date" name="date" id="date"></td>
                </tr>

                <tr>
                    <td>Time:</td>
                    <td><input type="time" name="time" id="time"></td>
                </tr>

                
                <tr>
                    <td>Theater Name:</td>
                    <td><input type="text" name="theatername" id="theatername"></td>
                </tr>
                <tr>
                    <td>Seat Type:</td>
                    <td><select name="seattype" id="seattype">
                    <option selected="selected" disabled="disabled" value="default"> Select</option>
                    <option value="lower">Lower</option>
                    <option value="middle">Middle</option>
                    <option value="balcony">Balcony</option>
                    </select></td>
                </tr>
                <tr>
                    <td>No Of Seats:</td>
                    <td><input type="number" name="noofseats" id="noofseats"></td>
                </tr>
          
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="register" id="submit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>