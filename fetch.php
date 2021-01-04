<?php
$connect = mysqli_connect("localhost", "root", "", "blood-bank");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM hospital 
	WHERE hosp_name LIKE '%".$search."%'
	OR hosp_address LIKE '%".$search."%' 
	
	";
}
else
{
	$query = "
	SELECT * FROM hospital ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '';
	while($row = mysqli_fetch_array($result))
	{
		$hosp_id= $row['hosp_id'];
		$output .= '
			<tr style="width:300px;background:white; border:1px solid black;">
				<td style="border-bottom:solid 1px black;padding:20px;"><a href="search.php?hosp_id='.$hosp_id.'" style="text-decoration:none;font-weight:bold; color:black;padding:100px;">'.$row["hosp_name"].'</a></td>
				
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