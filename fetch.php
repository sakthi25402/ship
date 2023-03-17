<?php


$connect = mysqli_connect("localhost", "root", "", "ship");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM shipdetails 
	WHERE Shipnum LIKE '%".$search."%'
	OR Shipname LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM shipdetails ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered" style="border:10px solid #800000;">
						<tr>
							<th bgcolor=Black><font color=white size=2>Id</font></th>
							<th bgcolor=Black><font color=white size=2>Shipnum</font></th>
							<th bgcolor=Black><font color=white size=2>Shipname</font></th>
							<th bgcolor=Black><font color=white size=2>latitude</font></th>
							<th bgcolor=Black><font color=white size=2>longitude</font></th>
							<th bgcolor=Black><font color=white size=2>Sdate</font></th>
							<th bgcolor=Black><font color=white size=2>click</font></th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["Shipnum"].'</td>
				<td>'.$row["Shipname"].'</td>
				<td>'.$row["latitude"].'</td>
				<td>'.$row["longitude"].'</td>
				<td>'.$row["Sdate"].'</td>
				<td><a href="http://maps.google.com/maps?q='.$row['latitude'].','.$row['longitude'].'">Click</a></td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>