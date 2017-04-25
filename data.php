<?php
$conn=mysqli_connect("localhost","root","","data");
$query=mysqli_query($conn,"select * from student");
while($row=mysqli_fetch_array($query))
{
	$sno=$row['sno'];
	$name=$row['name'];
	$rollno=$row['rollno'];
	$college=$row['college'];
	
	
}
?>
<html>
<head>
<title></title></head>
<body><form method="post">
<fieldset disabled>
	<table>
		<tr>
			<td>Sno</td>
			<td> <input type="text" value='<?php echo  $sno; ?>'/> </td>
		</tr>
		<tr>
			<td>Rollno</td>
			<td> <input type="text" value='<?php echo  $rollno; ?>'/> </td>
		</tr>
		<tr>
			<td>name</td>
			<td> <input type="text" value='<?php echo  $name; ?>'/> </td>
		</tr>
		<tr>
			<td>college</td>
			<td> <input type="text" value='<?php echo  $college; ?>'/> </td>
		</tr>
		
	</table>
</fieldset>
</form>
</body>


</html>
