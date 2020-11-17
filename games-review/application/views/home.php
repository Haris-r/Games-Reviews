<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Link CSS -->

	<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<title><?php echo $title;?></title>
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
				echo '<a class="nav-link" href="' . base_url() .'index.php/Logout"><button type="button" class="btn btn-outline-primary">Log-out</button></a>';
			}
		?>
	
		</form>
		</div>

	</nav>
      <!-- You can use code from your previous assignment -->

</head>

<style>

	.displayPic {
		padding: 10px 10px 10px 10px;
		border: 0 solid;
		box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
		outline: 1px solid;
		outline-color: rgba(255, 255, 255, .5);
		outline-offset: 0px;
		text-shadow: none;
		transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
	}

	.displayPic:hover {
		border: 1px solid;
		box-shadow: inset 0 0 20px rgba(255, 255, 255, .5), 0 0 20px rgba(255, 255, 255, .2);
		outline-color: rgba(255, 255, 255, 0);
		outline-offset: 15px;
		text-shadow: 1px 1px 2px #427388;
	}

	.container{

		margin: 10px 50px 50px 50px;

	}

</style>

<?php
// Manipulate the body CSS colour here.
?>

<body>


<div class="container">

		<?php

		if($status){
			echo '<h2 align="center"> Welcome ' . $show . ' check out our game reviews</h2>' ;
		}
		else{
			echo '<h2 align="center"> Hello stranger these are our most recent reviews </h2>';	
		}

		echo '<div class="row justify-content-center ">';

        foreach ($result as $row)
        {
            // These classes onlywork if you attach Bootstrap.

            echo '<div class="card cardBodyWidth '.$cssBodyClass.'">';
            // This is presuming you have a column in your database table called ReviewImage.
            $thisImage = $row->ReviewImage;
            $thisInfo = $row->GameBlurb;
            $thisTitle = $row->GameName;
		      	$thisSlug = $row->slug;

			echo '<div class="displayPic"> ';


            $image = base_url()."application/images/". $thisImage;

            echo '<h6>'.$thisTitle.'</h6>';

            echo '<a href="'.base_url()."index.php/review/".$thisSlug.'"> <img src="'.$image.'"  height="400px" width="300px"> </a>' ;

            // Look into the image properties library in CodeIgniter for more help on images:
			echo "</div>";
			echo "</div>";

        }


        ?>
    </div>
</div>
</body>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<button id="#chatButton" class="open-button"> The chat server is down! </button>

<div class="chat-popup" id="myForm">
  <form id="chatbox" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    
	<div id="chatspace"></div>
	<input type="text" id="msg"></input>
    <button type="submit" id="sendButton" class="btn">Send</button>

	
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<!-- This section needs editing to create the chat system using HTML
<button id="chatButton" class="btn btn-outline-success" onclick="openForm()" > Chat </button>
<div class="chat-popup pull-right" id="myForm">
<form id="myform" class="form-container">
</form>
</div> -->





<!-- Load in the required scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>



<script>
var options = {
bottom: '64px', // default: '32px'
right: 'unset', // default: '32px'
left: '32px', // default: 'unset'
time: '0.5s', // default: '0.3s'
mixColor: '#fff', // default: '#fff'
backgroundColor: '#fff',  // default: '#fff'
buttonColorDark: '#100f2c',  // default: '#100f2c'
buttonColorLight: '#fff', // default: '#fff'
saveInCookies: false, // default: true,
label: '🌓', // default: ''
autoMatchOsTheme: true // default: true
}

const darkmode = new Darkmode(options);
darkmode.showWidget();
</script>
<!-- Don't forget to load in Vue abd socket.io -->





<!-- Load in your custom scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
<Script src="<?php echo base_url('application/scripts/chat.js')?>"> </script>




</html>

