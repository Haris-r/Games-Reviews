<html>
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Link CSS -->
      <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <title><?php echo $title?></title>
      <!-- These classes onlywork if you attach Bootstrap. -->
      <!-- Add your code here to create a nav bar -->
      	<nav class="navbar navbar-expand-lg navbar-light bg-light">



<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li>
		<a class="navbar-brand" href="<?php echo base_url();?>index.php/Home"  >Games Reviews</a>
	</li>
	<li>
		<a class="nav-link" href="<?php echo base_url();?>index.php/Home" > Home </a>
	</li>

</ul>
<form class="form-inline my-3 my-lg-0">

<?php

	if(!$status){
		echo'<a class="nav-link" href="' . base_url() .'index.php/Login"><button type="button" class="btn btn-outline-primary">Log-in</button></a>';
	}
	else{
		echo'<a class="nav-link" href="' . base_url() .'index.php/Logout"><button type="button" class="btn btn-outline-primary">Log-out</button></a>';
	}
?>

</form>
</div>

</nav>
      <!-- You can use code from your previous assignment -->
   </head>
   <!-- The scripts -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
   <body>

   <style>

#GameID{
	display: none;
}
	   
	</style>
      <div class="container">
     
         <?php
            foreach ($result as $row)
            {
            	// These classes onlywork if you attach Bootstrap.
            
            	echo '<div class="card cardBodyWidth '.$cssBodyClass.'">';
            	// This is presuming you have a column in your database table called ReviewImage.
            	$thisReviewID = $row->ID;
            	$thisImage = $row->ReviewImage;
            	$thisBlurb = $row->GameBlurb;
            	$thisTitle = $row->GameName;
            	$thisSlug = $row->slug;
            	$thisReview = $row->GameReview;
            
            	$image = base_url()."application/images/". $thisImage;
            
            	set_cookie('reviewID', $thisReviewID, 10000);
            	echo '<h2 id="GameID">' . $thisReviewID . '</h2>';
            	echo '</div>';
            
            
            }
            
            echo '</div>';
            
            
            ?>
      </div>
      <br>
      <div class="container-fluid">
         <div class="row content">
            <div class="col-sm-3 sidenav">
               <h3><?php echo $thisTitle; ?></h3>
               <?php echo '<img src="'.$image.'" class="img-fluid" alt="Responsive image" height="400px" width="300px">' ?>
               <p> <?php echo $thisBlurb ?></p>
			</div>

			
			<div class="col-sm-9">

	
               <h4><small><?php echo $thisTitle; ?>'s Review </small></h4>
               <hr>
               <div class="bd-callout bd-callout-warning">
                  <p><?php echo $thisReview; ?></p>
               </div>
			   <hr>

			<?php

			if(!$status){


             echo <<<_END
            <h5>To comment down your own review of the game you must first log-in</h5>

            <div id="app">
            <br>
            <h5> Comments: </h5>
               <hr>
               <div v-for="currentcomment in comments">
               <div class="col-sm-10">
               <h4>{{currentcomment.UserName}}</h4>
               <p>{{currentcomment.UserComment}}</p>
               <br>
               </div>
			   </div>
			   </div>
            
_END;
			}
			else{

				echo <<<_END

				<h5>Leave a Comment:</h5>
			
				   <div class="form-group">
					  <textarea class="form-control" name= "UserComment"  id="commentArea" rows="3" required></textarea>
				   </div>
				   <div id="app">
					  <button  class="btn btn-success" v-on:click="setList(event)">Submit</button>

				<br>
               <h1>{{heading}}</h1>
               <hr>
               <div v-for="currentcomment in comments">
               <div class="col-sm-10">
               <h4>{{currentcomment.UserName}}</h4>
               <p>{{currentcomment.UserComment}}</p>
               <br>
               </div>
			   </div>
			   </div>
_END;
			}

 
			   ?>

			</div>
        
         </div>
      </div>
      <script src="http://cdn.jsdelivr.net/npm/vue"></script>
      <script src="<?php echo base_url('application/scripts/CustomVue.js');?>"></script>
   </body>
</html>