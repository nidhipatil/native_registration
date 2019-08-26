<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="style.css">
</head>

<body>
    
  <form  class="container" method="post" enctype="multipart/form-data" action="connect.php" >
  
   <table>

<tbody>
    <th colspan="2" bgcolor="black">Register Here</th>

  <tr>
    <td>Enter your Name : </td>
    <td><input type="text" placeholder="your  name"  name="name"  required /></td>
  </tr>

  <tr>
    <td>Enter your Email: </td>
    <td><input type="email" placeholder="your  email" name="email" required/></td>
  </tr>

  <tr>
    <td>Enter your Password : </td>
    <td><input type="password" placeholder="your  Password"  name="password" required/></td>
  </tr>

  <tr>
    <td>Enter your Address : </td>
    <td><textarea  placeholder="your  Address" name="address"></textarea></td>
  </tr>

  <tr>
    <td>Enter your Phone No. : </td>
    <td><input type="number" placeholder="Phone No." name="phone" required/></td>
  </tr>

  
  <tr>
    <td>Select your Gender :  </td>
    <td>
	Male<input type="radio" name="gender" value="Male"/>
	Female<input type="radio" name="gender" value="Female"/>
	</td>
  </tr>

  <tr><td>Country</td>
     <td> 
      <select name="country">
      <option value="India">India</option>
      <option value="Nepal">Nepal</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Colombia">Colombia</option>
      <option value="China">China</option>
      <option value="Brazil">Brazil</option>
      <option value="Egypt">Egypt</option>
      <option value="France">France</option>
      <option value="Iraq">Iraq</option>
      <option value="Italy">Italy</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Japan">Japan</option>
     </select>
   </td>
  </tr>


  <tr>
    <td>Choose your Hobbies</td>
    <td>
		Cricket<input type="checkbox" value="cricket" name="hobby[]"/>
		Singing<input type="checkbox" value="singing" name="hobby[]"/>
		Writing<input type="checkbox" value="Writing" name="hobby[]"/>
    Drawing<input type="checkbox" value="Drawing" name="hobby[]"/>
    Dancing<input type="checkbox" value="Dancing" name="hobby[]"/>
	</td>
  </tr>

  <tr>
    <td>Choose your Skills</td>
    <td>
    HTML<input type="checkbox" value="HTML" name="skill[]"/>
    JAVA<input type="checkbox" value="JAVA" name="skill[]"/>
    PHP<input type="checkbox" value="PHP" name="skill[]"/>
    .NET<input type="checkbox" value="NET" name="skill[]"/>
    SQL_DATABASE<input type="checkbox" value="SQL" name="skill[]"/>
  </td>
  </tr>

  <tr>
    <td>Date Of Birth</td>
    <td><input type="Date"  name="date"  /></td>
  </tr>

  


  <tr>
   <td colspan="2" align="center">
  <input type="submit" name="submit" value="submit"/>
  <button><a href="info.php"> View Information</a></button> 
  </td>

  </tr>

</tbody>
</table>
</form>
</body>
</html>


