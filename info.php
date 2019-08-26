<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>


<?php
include 'connect.php';
?>

<table border="1px">
	<tr class="td">
		<td>Name</td>
		<td>Email</td>
		<td>Password</td>
		<td>Address</td>
		<td>Phone No.</td>
		<td>Gender</td>
		<td>Country</td>
		<td>Hobby</td>
	    <td>Skills</td>
	    <td>Date</td>
	     <td>Edit/Delete</td>
	<tr>

<tbody>

<?php while ($row = mysqli_fetch_array($results)) { ?>
	

	<tr>
    <td><?php echo $row['Name']?></td>
    <td><?php echo $row['Email']?></td>
    <td><?php echo $row['Password']?></td>
    <td><?php echo $row['Address']?></td>
    <td><?php echo $row['phone']?></td>
    <td><?php echo $row['Gender']?></td>
    <td><?php echo $row['Country']?></td>
    <td><?php echo $row['Hobby']?></td>
    <td><?php echo $row['skill']?></td>
    <td><?php echo $row['DOB']?></td>
    </tr>
  <?php }?>

</tbody>
</table>
 </body>
</html>
 
		
		
		

 <button><a href="index.php">BACK</a></button> 
