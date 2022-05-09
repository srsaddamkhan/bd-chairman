<!--------- Form Adding Data ---------->
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>Admin Panel</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" type="text/css" href="css/form.css ?v=<?php echo time(); ?>">

	    <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;700;800;900&display=swap" rel="stylesheet">
    </head>
<body>
	<div class="side-bar">
	    <div class="side-menu">
            <a href="#">BD Chairman</a>

            <ul>
            	<li><a href="admin.php"><i class="fas fa-home"></i>Home</a></li>
            	<li><a href="dashboard.php"><i class="fab fa-dashcube"></i>Dashboard</a></li>
            	<li><a href="#"><i class="fas fa-user"></i>Chairman</a></li>
            	<li><a href="#"><i class="fab fa-accusoft"></i>Ambassadors</a></li>
            	<li><a href="#"><i class="far fa-newspaper"></i>News</a></li>
            	<li><a href="#"><i class="fas fa-user-circle"></i>Account</a></li>
            	<li><a href="#"><i class="fas fa-tasks"></i>Task</a></li>
            	<li><a href="#"><i class="fas fa-cog"></i></i>Setting</a></li>
            </ul>
	    </div>
    </div>
	<div class="main-container">
		<div class="header">
			<div class="search-bar">
				<i class="fas fa-search"></i>
				<input type="text" name="search-bar" id="search-bar" placeholder="search here">
			</div>
			<div class="profile"><i class="fas fa-users"></i></div>
		</div>
		 
		<form action="" method="POST">
			<div class="form">
				 <div class="form-group">
				 	<input type="text" class="form-control" name="form-content" placeholder="Enter input content" value="" required=""/>
				 </div>

		        <div class="form-btn">
		            <input type="submit" class="btnsubmit" name="submit"
		            value="Add Data"/>
                   
                    <a href="dashboard.php"><input type="button" class="btncheck" name="check"
		            value="Form Check"/></a>
		        </div>

			</div>
		</form>
	</div>
</body>
</html>


<?php

include 'connection.php';


if(isset($_POST['submit']))
{
    $contentData = $_POST['form-content'];

  /*  $insertquery = " insert into chairman_most_question(content) 
    value('$contentData') "; */

    $insertquery = " insert into chairman_most_answer(content) 
    value('$contentData') ";

 /*  $insertquery = " insert into top_questions_updates(content) 
    value('$contentData') ";

    $insertquery = " insert into recent_answers_updates(content) 
    value('$contentData') ";

    $insertquery = " insert into recent_development_updates(content) 
    value('$contentData') ";

    $insertquery = " insert into news(content) 
    value('$contentData') ";

    $insertquery = " insert into facebook(content) 
    value('$contentData') ";

    $insertquery = " insert into youtube(content) 
    value('$contentData') "; */

    $res = mysqli_query($con, $insertquery); 

    if ($res) {
    	?>
    	<script>
    		alert('data insert properly');
    	</script>
    	<?php
    }
    else
    {
    	?>
    	<script>
    		alert('data not inserted');
    	</script>
    	<?php

    }

}


?>