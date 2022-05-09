<!--------- Admin Panel ---------->
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>Admin Panel</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" type="text/css" href="css/admin.css ?v=<?php echo time(); ?>">

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
            <a href="../index-main.php">BD Chairman</a>

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
			<div class="profile"><button type="submit" class="btn2" name="logout"><a href="../index-main.php" target="_blank">Logout</a></button></div>
		</div>
		<div class="overview">
			<h1>Dashboard Overview</h1>
			<div class="inner-overview">
		        <div class="innner">
		        	<div class="card">
		        	    <i class="fas fa-user-tie"></i>
		        	    <div class="card-1">
		        	        <h4>New Chariman</h4>
		        	        <h3><span>+ </span>4362</h3>
		        	    </div>
		        	</div>
		        	<a href="#">View all</a>
		        </div>
			    <div class="innner">
			    	<div class="card">
		        	    <i class="fab fa-accusoft"></i>
		        	    <div class="card-1">
		        	        <h4>Ambassadors</h4>
		        	        <h3><span>+ </span>4362</h3>
		        	    </div>
		        	</div>
		        	<a href="#">View all</a>
			    </div>
			    <div class="innner">
			    	<div class="card">
		        	    <i class="fas fa-user"></i>
		        	    <div class="card-1">
		        	        <h4>Total Chariman</h4>
		        	        <h3><span>+ </span>4362</h3>
		        	    </div>
		        	</div>
		        	<a href="#">View all</a>
			    </div>
		</div>
		<div class="recent-activiy-map">
			 <div class="text-map">
			 	<h4>Recent Activity Map</h4></div>
			 <div class="full-map">
			 	
			 </div>
		</div>
		 

	</div>
</body>
</html>