<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <center>
    <img src="logo-mutu1.png" alt="">
    <h1>Register</h1>
    </center>
<div>
  <form action="login.html">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="user">Username</label>
    <input type="text" id="user" name="username" placeholder="Your username..">

    <label for="pass">Password</label>
    <input type="password" name="password" id="pass" placeholder="Your password..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Jakarta">Jakarta</option>
      <option value="Surabaya">Surabaya</option>
      <option value="Medan">Medan</option>
      <option value="Karawang">Karawang</option>
      <option value="Malang">Malang</option>
      <option value="Denpasar">Denpasar</option>
      <option value="Yogyakarta">Yogyakarta</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>