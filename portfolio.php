<?php
 session_start();
 
 // connect to database
 $conn = mysqli_connect('localhost','root','','portfolio_db');
 if(!$conn)  //Checking for connection
 {
	 die("Couldn't connect"); 
 }
 
 if(isset($_POST['submit']))
 {
	 //session start
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $message = $_POST['textmessage'];
	 
	 //input information to database
	 
	 $db = "INSERT INTO `portfolio_table`(`Username`, `Email`, `Message`) VALUES ('$username','$email','$message')";
	 mysqli_query($conn, $db);
	 
	 $_SESSION['message'] = 'Message Submitted successfully, Thanks You.';
 }
?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Amatic SC">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Freckle Face">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fredericka the Great">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Bubblegum Sans">
	<meta charset="UTF-8">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


function pop()
{
 alert('Sorry.\nServer Error. Mail me or Call me on the given details.\nThanks');
}

</script>
</head>
<body>
    <!-- Home page -->
	<header>
		<div class="homeBox" id="home">
			<ul>
				<a href="#home"><li>Home</li></a>
				<a href="#about"><li>About</li></a>
				<a href="#work"><li>Work</li></a>
				<a href="#contact"><li>Contact</li></a>
			</ul>
			
			<img src="image/anigif10.gif" class="logo">
			<br>
			<center>
			<div class="home_main">
				<span class="hello">Hello!</span>
				<p class="hello2">My name is Fahad and I am a Web designer.</p>
				<br>
				<a href="#about"><div class="btn"><span>Explore</span></div></a>
			</div>
			</center>
		</div>
	</header> 
	<!-- End of Home page -->
	<br>
	<!-- About page -->
	<div class="homeBox" id="about" style="height:150%;">
		<ul>
				<a href="#home"><li>Home</li></a>
				<a href="#about"><li>About</li></a>
				<a href="#work"><li>Work</li></a>
				<a href="#contact"><li>Contact</li></a>
			</ul>
			<br>
		<center>	
		<h3 class="page-title">ABOUT ME</h3>
		<table>
			<tr><td>
			<table class="table1-about">
				<tr>
					<td><img src="image/aviary-image-1475401194036.jpg" alt="my pic" class="myPic"></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td><span style="font-size:22px; margin-right:10px;">Download my Resume</span><a href="" ><img src="image/pdflogo.png" style="width:50px; height:50px;" alt="download icon"></a></td>
				</tr>
			</table>
			
			<table class="table2-about">
				<tr ><td colspan="2"><span class="table2-about-h">Fahad Ansari</span></td></tr>
				<tr><td colspan="2"><span class="table2-about-content">Web Designer<br>Blogger</span></td></tr>
				<tr height="20px"><td colspan="2"></td></tr>
				<tr>
					<td colspan="2"><span class="table2-about-h">Education and Training</span></td>
				</tr>
				<tr>
					<td colspan="2"><span class="table2-about-content">B.Tech in Computer Science and Technology<br>I.T.S Engineering College<br>Greater Noida</span></td>
				</tr>
				<tr>
					<td colspan="2"><span class="table2-about-content" style="color:yellow;">PHP</span><br><span class="table2-about-content">Incapp Infotech<br>Greater Noida</span></td>
				</tr>
				<tr>
					<td colspan="2"><span class="table2-about-content" style="color:yellow;">Web Designing</span><br><span class="table2-about-content">NIIT<br>Greater Noida</span></td>
				</tr>	
				<tr height="20px"><td colspan="2"></td></tr>
				<tr><td colspan="2"><span class="table2-about-h">Skills</span></td></tr>
				<tr>
					<td><span class="table2-about-content">HTML<BR>Javascript<br>PHP</span></td>
					<td><span class="table2-about-content">CSS<br>jQuery<br>Graphic Design</span></td>
				</tr>
				<tr><td colspan="2"><span class="table2-about-h">Hobbies</span></td></tr>
				<tr>
					<td><span class="table2-about-content">Sketching<BR>Blogging</span></td>
					<td><span class="table2-about-content">Music<br>Cooking</span></td>
				</tr>
				<tr height="70px"><td colspan="2"></td></tr>
			</table>
			</td></tr>
			</table>
		
		</center>
	</div>
	<!-- End of About page -->
	
	<!-- Work Page -->
	<main>
	<div class="homeBox" id="work" style="height:180%">
		<ul>
				<a href="#home"><li>Home</li></a>
				<a href="#about"><li>About</li></a>
				<a href="#work"><li>Work</li></a>
				<a href="#contact"><li>Contact</li></a>
			</ul>
			<br>
		<center>	
		<h3 class="page-title">WORK</h3>
			<table class="table-work">
				<tr height="160px">
					<td width="220px"><img src="image/work1.png" style="width:220px; height:160px;" alt="funscientia"></td>
					<td width="50px"></td>
					<td width="430px"><span class="table2-about-h">FUNSCIENTIA</span>
					<br><span class="table2-about-content">url:  http://fahadansari.pe.hu/<br>A website based for science geek in an information and funny way.<br>Web Development, Content Writing</span>
					</td>
				</tr>
				<tr height="60px"><td colspan="3"></td></tr>
				<tr height="160px">
					<td width="220px"><img src="image/work2.png" style="width:220px; height:160px;" alt="funscientia"></td>
					<td width="50px"></td>
					<td width="430px"><span class="table2-about-h">RED CRAB FILMS</span>
					<br><span class="table2-about-content">url:  https://www.youtube.com/channel/UCm3pv6md-mucyVHD9heOt4A<br>A Youtube Channel that show videos of Computer Tricks and animated stories.<br>Video Editing, Plot writing.</span>
					</td>
				</tr>
				<tr height="60px"><td colspan="3"></td></tr>
				<tr height="160px">
					<td width="220px"><img src="image/work3.png" style="width:220px; height:160px;" alt="funscientia"></td>
					<td width="50px"></td>
					<td width="430px"><span class="table2-about-h">BLOGGING</span>
					<br><span class="table2-about-content">url:  http://hubpages.com/@fahadansari12<br>Writing blogs for almost three years on Hubpage.com<br><br>Blog Writing
					</td>
				</tr>
				<tr height="60px"><td colspan="3"></td></tr>
				<tr height="160px">
					<td width="220px"><img src="image/work4.png" style="width:220px; height:160px;" alt="funscientia"></td>
					<td width="50px"></td>
					<td width="430px"><span class="table2-about-h">THE GREEN AREA</span>
					<br><span class="table2-about-content">url:  http://fahadansari.pe.hu/home.html<br>Website that have Technology news updates, Q/A forum and Converter tools.(under development)<br><br>Web Development
					</td>
				</tr>
				<tr height="60px"><td colspan="3"></td></tr>
			</table>
		</center>
		</div>
	</main>
	<!-- End of Work Page -->
	<br>
	
	<!-- Contact page -->
	<main>
	<div class="homeBox" style="height:120%;" id="contact">
		<ul>
				<a href="#home"><li>Home</li></a>
				<a href="#about"><li>About</li></a>
				<a href="#work"><li>Work</li></a>
				<a href="#contact"><li>Contact</li></a>
			</ul>
			<br>
		<center>	
		<h3 class="page-title">CONTACT ME</h3>
		<h3 class="table2-about-content" style="font-size:23px;">Hello Guys, If you wanna me to build your Website or work with you together. Please be free to contact me. Always ready to be there. :)</h3>
		<br>
		
		<?php
		if(isset($_SESSION['message']))
		{
			echo "<div class='submit_msg'>"."<br>".$_SESSION['message']."</div>";
			unset($_SESSION['message']);
		}
		?>
		<div class="contact-box" style="float:left; margin-left:14%;">
		 <form action="portfolio.php#contact" method="post">
			<input type="text" name="username" id="username" style="margin-top:30px;" placeholder="Enter Name"><br><br>
			<input type="email" name="email" id="email"  placeholder="Enter your Email"><br><br>
			<textarea placeholder="Type your message here" name="textmessage" id="textmessage"></textarea><br><br>
			<input type="submit" name="submit" id="submit" value="Submit"	style="background-color:; font-family:'Bubblegum Sans'; font-size:17px;">
		 </form>
		</div>
		<div class="contact-box" style="float:left; margin-left:150px;"><br>
		<h3 style="font-size:22px; font-family:'Bubblegum Sans'; color:yellow;">You can Contact me through</h3>
		<p style="font-size:21px; font-family:'Bubblegum Sans';">Mail me:</p>
		<p style="font-size:21px; font-family:'Bubblegum Sans'; color:yellow;">fahadansari12feb@gmail.com<br>funscien@gmail.com<br>redcrabfilmsindia@gmail.com</p>
		<p style="font-size:21px; font-family:'Bubblegum Sans';">You can ring me at:</p>
		<p style="font-size:21px; font-family:'Bubblegum Sans'; color:yellow;">+91-8287766385</p>
		</div>
		</center>
	
	</div>
	</main>
	<!-- End of Contact page -->
</body>
</html>