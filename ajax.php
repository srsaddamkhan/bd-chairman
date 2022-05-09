<?php

$conn = mysqli_connect('localhost','root','','bd_chairman');


if (isset($_POST['id'])) 
{
	$id=$_POST['id'];

    $query=mysqli_query($conn,"select * from district where division_id='$id' ");
	while ($row=mysqli_fetch_array($query)) 
	{
	 	
	$id=$row['id'];
	$district=$row['district'];
	echo "<option value='$id'>$district</option>";
	}
}


if (isset($_POST['districtId'])) 
{
	$id=$_POST['districtId'];

    $query=mysqli_query($conn,"select * from upazila where district_id='$id' ");
	while ($row=mysqli_fetch_array($query)) 
	{
	 	
	$id=$row['id'];
	$upazila=$row['upazila'];
	echo "<option value'$id'>$upazila</option>";
	}
}  
  
?>