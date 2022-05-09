<!----------- Dashboard Front End ---------->
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>Dashboard</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" type="text/css" href="css/dashboard.css ?v=<?php echo time(); ?>">

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
            	<li><a href="dashboard.php"><i class="fab fa-dashcube"></i>Dashboard</a>

            <!--    <ul>
                     <li>chairman got</li>
                     <li>chairman got</li>
                     <li>chairman got</li>
                     <li>chairman got</li>
                 </ul>
                </li>   -->

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
		<div class="dashboard-body">
            <form action="" method="Post">
            	<div class="most-question" id="most-question">
            	    <div class="inner-most-question" id="inner-most-question">
            		    <h4>Chairman Got Most Questions</h4>
            		    <a href="form.php"><input type="button" class="btnadd" name="btnadd" value="Add Data"/></a>
            	    </div>

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

                                    while ($res = mysqli_fetch_array($query)) 
                                    {

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

            	</div>

            	<div class="most-answer" id="most-answer">
            	    <div class="inner-most-answer" id="inner-most-answer">
            		    <h4>Chairmans Gave Most Answers</h4>
            		    <a href="form.php"><input type="button" class="btnadd" name="btnadd" value="Add Data"/></a>
            	    </div>

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

                                    $selectquery = " select * from chairman_most_answer ";

                                    $query = mysqli_query($con, $selectquery);


                                    $nums = mysqli_num_rows($query);

                                    $res = mysqli_fetch_array($query);

                                    while ($res = mysqli_fetch_array($query)) 
                                    {

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


            	</div>

            	<div class="question-updated" id="question-updated">
            	    <div class="inner-question-updated" id="inner-question-updated">
            		    <h4>Top Questions Updates</h4>
            		    <a href="form.php"><input type="button" class="btnadd" name="btnadd" value="Add Data"/></a>
            	    </div>

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

                                    $selectquery = " select * from top_questions_updates";

                                    $query = mysqli_query($con, $selectquery);


                                    $nums = mysqli_num_rows($query);

                                    $res = mysqli_fetch_array($query);

                                    while ($res = mysqli_fetch_array($query)) 
                                    {

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


            	</div>

            	<div class="answer-updated" id="answer-updated">
            	    <div class="inner-answer-updated" id="inner-answer-updated">
            		    <h4>Recent Answers Updates</h4>
            		    <a href="form.php"><input type="button" class="btnadd" name="btnadd" value="Add Data"/></a>
            	    </div>

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

                                    $selectquery = " select * from recent_answers_updates ";

                                    $query = mysqli_query($con, $selectquery);


                                    $nums = mysqli_num_rows($query);

                                    $res = mysqli_fetch_array($query);

                                    while ($res = mysqli_fetch_array($query)) 
                                    {

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

            	</div>

            	<div class="development" id="development">
            	    <div class="inner-development" id="inner-development">
            		    <h4>Recent Development Updates</h4>
            		    <a href="form.php"><input type="button" class="btnadd" name="btnadd" value="Add Data"/></a>
            	    </div>

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

                                    $selectquery = " select * from recent_development_updates ";

                                    $query = mysqli_query($con, $selectquery);


                                    $nums = mysqli_num_rows($query);

                                    $res = mysqli_fetch_array($query);

                                    while ($res = mysqli_fetch_array($query)) 
                                    {

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

            	</div>

            	<div class="news" id="news">
            	    <div class="inner-news" id="inner-news">
            		    <h4>News</h4>
            		    <a href="form.php"><input type="button" class="btnadd" name="btnadd" value="Add Data"/></a>
            	    </div>

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

                                    $selectquery = " select * from news ";

                                    $query = mysqli_query($con, $selectquery);


                                    $nums = mysqli_num_rows($query);

                                    $res = mysqli_fetch_array($query);

                                    while ($res = mysqli_fetch_array($query)) 
                                    {

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

            	</div>

            	<div class="facebook" id="facebook">
            	    <div class="inner-facebook" id="inner-facebook">
            		    <h4>Facebook</h4>
            		    <a href="form.php"><input type="button" class="btnadd" name="btnadd" value="Add Data"/></a>
            	    </div>

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

                                    $selectquery = " select * from facebook ";

                                    $query = mysqli_query($con, $selectquery);


                                    $nums = mysqli_num_rows($query);

                                    $res = mysqli_fetch_array($query);

                                    while ($res = mysqli_fetch_array($query)) 
                                    {

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

            	</div>

            	<div class="youtube" id="youtube">
            	    <div class="inner-youtube" id="inner-youtube">
            		    <h4>Youtube</h4>
            		    <a href="form.php"><input type="button" class="btnadd" name="btnadd" value="Add Data"/></a>
            	    </div>
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

                                    $selectquery = " select * youtube";

                                    $query = mysqli_query($con, $selectquery);


                                    $nums = mysqli_num_rows($query);

                                    $res = mysqli_fetch_array($query);

                                    while ($res = mysqli_fetch_array($query)) 
                                    {

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

            	</div>
            </form>
			 
		</div>
	 

	</div>
</body>
</html>

