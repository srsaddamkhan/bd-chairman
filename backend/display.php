

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <div class="table-part">
            	    	<table>
            	    		<thead>
            	    			<tr>
            	    				<th style="width: 100px;">id</th>
            	    				<th>Content</th>
            	    				<th colspan="2">Operation</th>
            	    			</tr>
            	    		</thead>

            	    		<tbody>

<?php


include 'connection.php';

$selectquery = " select * from chairman_most_question ";

$query = mysqli_query($con, $selectquery);


$nums = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

while ($res = mysqli_fetch_array($query)) {

?>
    <tr>
        <td> <?php echo $res['id']; ?> </td>
        <td> <?php echo $res['content']; ?> </td>
        <td style="width: 35px"><i class="fa fa-edit" aria -hidden="true"></i></td>
        <td style="width: 35px"><i class="fa fa-trash" aria-hidden="true"></i></td>
    </tr>
<?php
}

?>

            	                
                            
                            </tbody>
            	    	</table>
            	    	
            	    </div>


</body>
</html>