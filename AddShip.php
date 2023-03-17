
<?php
include('Adminheader.php');
include_once("config.php");  
?>


<div align="center">




<form action="" name="register"  id="register" method="post">
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
	<br>
<table>
<tr>
<td>
<h2>Add Ship Details</h2>
</td>
</tr>

</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="350" height="350">
	
	
	<tr>
		<td class="col" style="color: #000000">Ship Number:</td>
		<td><input type="text" name="t1" value=""  style="color: #000000" class="required" />
		</td>

	</tr>

	<tr>
		<td class="col" style="color: #000000">Ship Name:</td>
		<td><input type="text" name="t2" value=""  style="color: #000000" class="required" /></td>
	</tr>
	
	<tr>
		<td class="col" style="color: #000000">Latitude:</td>
		<td><input type="text" name="t3" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	
	

	<tr>
		<td class="col"  style="color: #000000">Longitude:</td>
		<td> <input type="text" name="t4" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col"  style="color: #000000">Date:</td>
		<td> <input type="text" name="t5" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>

<h1><font color="#FFA500">Ship Details</font></h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #FFA500;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>ID</font></th>
			<th bgcolor=Black><font color=white size=2>Ship Num</font></th>
			<th bgcolor=Black><font color=white size=2>Name</font></th>
			<th bgcolor=Black><font color=white size=2>Latitude</font></th>
			<th bgcolor=Black><font color=white size=2>Longitude</font></th>
			<th bgcolor=Black><font color=white size=2>Date</font></th>
			<th bgcolor=Black><font color=white size=2>View Map</font></th>
			<th bgcolor=Black><font color=white size=2>Delete</font></td>
			  
	</tr>
	
	<?php
	
	$query = "select * from shipdetails";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Shipnum']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Shipname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['latitude']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['longitude']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Sdate']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2>
		<a href="http://maps.google.com/maps?q=<?php echo $row['latitude']; ?>,<?php echo $row['longitude']; ?>">Click</a></font></td>
		<td bgcolor=white><font color=#000000 size=2><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	<br>
	<br>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {

	
	
	$query = "INSERT INTO `shipdetails`"; 
	$query .= " VALUES ('null','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."', '";
	$query .=  $_POST['t4']."','".$_POST['t5']."')";
        echo $query;
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:AddShip.php");
exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from shipdetails where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:AddShip.php");
	exit;
	}

?>
 

