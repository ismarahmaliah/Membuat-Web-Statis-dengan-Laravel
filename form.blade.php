<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<p><b>Sign Up Form</b></p>

<form action="/selamat-datang" method="post">
@csrf
  <p><label for="fname">First name:</label><br></form>
  
  <input type="text" id="fname" name="fname" value=""><br></p>
  
  <p><label for="lname">Last name:</label><br>
  
  <input type="text" id="lname" name="lname" value="" ><br></p>
<p><label>Gender:</label></p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>

  <p>	<label>Nationality:</label></p>
  	<select name="Nationality">
  		 <option value=""></option>
  <option value="afghan">Indonesian</option>
  <option value="albanian">Singapuran</option>
  <option value="algerian">Malaysian</option>
  <option value="australian">Australian</option>
 
            </select><br>

            <p><label>Language Spoken:</label></p>
  <input type="checkbox" id="ina" name="Language" value="ina">
  <label for="ina">Bahasa Indonesia</label><br>
  <input type="checkbox" id="eng" name="Language" value="eng">
  <label for="eng">English</label><br>
  <input type="checkbox" id="other" name="Language" value="other">
  <label for="other">Other</label><br>

<p>
            <label>Bio:</label></p>
         <textarea name="bio" rows="10" cols="30"></textarea><br>
        <form action="/selamatdatang">
         <button type="submit" value="login">Sign Up</button>
      </form>
</body>
</html>