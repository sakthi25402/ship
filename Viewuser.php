
<?php
include('Userheader.php');
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

</table>

	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>

<h1><font color="#FFA500">Personal Details</font></h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #FFA500;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>Name</font></th>
			<th bgcolor=Black><font color=white size=2>User Id</font></th>
			<th bgcolor=Black><font color=white size=2>Password</font></th>
			<th bgcolor=Black><font color=white size=2>Email id</font></th>
			<th bgcolor=Black><font color=white size=2>Address</font></th>
			<th bgcolor=Black><font color=white size=2>Mobile</font></th>
			
			
			  
	</tr>
	
	<?php
	
	$query = "select * from user where Uid='".$_SESSION['login_user']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['fname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Pwd']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['email_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['address']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['mobile']; ?></font></td>
			
		
	</tr>
	<?php }  ?>
	
	</table>
	</form>
</div>



<?php


?>
 

