<!--
Author: Camden I. Wagner
File: index.php
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Website Title & Description -->
	<title>LA Chess Club</title>
	<meta name="description" content="">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="styles.css">

	<!-- Custom JS -->
	<script type="text/javascript">

	function setup() {
		toggle_about();
	}
	
	function toggle_about() {
		var x = document.getElementById('about');
		if (x.style.display === 'none') {
			x.style.display = 'block';
		}
		var y = [];
		y.push(document.getElementById('schedule'));
		y.push(document.getElementById('classes'));
		y.push(document.getElementById('location'));
		y.push(document.getElementById('contact_us'));
		for (var i = 0; i < y.length; i++) {
			y[i].style.display = 'none';
		}
	}
	function toggle_schedule() {
		var x = document.getElementById('schedule');
		if (x.style.display === 'none') {
			x.style.display = 'block';
		}
		var y = [];
		y.push(document.getElementById('about'));
		y.push(document.getElementById('classes'));
		y.push(document.getElementById('location'));
		y.push(document.getElementById('contact_us'));
		for (var i = 0; i < y.length; i++) {
			y[i].style.display = 'none';
		}
	}
	function toggle_location() {
		var x = document.getElementById('location');
		if (x.style.display === 'none') {
			x.style.display = 'block';
		}
		var y = [];
		y.push(document.getElementById('about'));
		y.push(document.getElementById('classes'));
		y.push(document.getElementById('schedule'));
		y.push(document.getElementById('contact_us'));
		for (var i = 0; i < y.length; i++) {
			y[i].style.display = 'none';
		}
	}


	window.addEventListener('load', setup, false);
	
	</script>

</head>
<body>

	<section id="header" name="header">
		<div class="row" style="background-color: #EEEEEE;">
			<div class="col-2"></div>
			<div class="col-1">
				<center><img style="margin-top: 10px;-moz-transform: scaleX(-1);-o-transform: scaleX(-1);-webkit-transform: scaleX(-1);transform: scaleX(-1);filter: FlipH;-ms-filter: "FlipH";" src="img/pieces/w_Knight.png"></center>
			</div>
			<div class="col-6">
				<center><h1 id="title">Los Angeles Chess Club</h1></center>
			</div>
			<div class="col-1">
				<center><img style="margin-top: 10px;" src="img/pieces/b_Knight.png"></center>
			</div>
			<div class="col-2"></div>
		</div>
	</section>

	<section id="nav" name="nav">
		<div class="row" style="background: rgba(0,0,0,0.7);">
			<div class="col-2"></div>
			<div class="col-8">
				<ul style="height:25px;margin-top: 5px;">
					<li><center><button onclick="toggle_about()">About</button></center></li>
					<li><center><button onclick="toggle_schedule()">Schedule</button></center></li>
					<li><center><button onclick="toggle_classes()">Classes</button></center></li>
					<li><center><button onclick="toggle_location()">Location</button></center></li>
					<li><center><button onclick="toggle_contact_us()">Contact Us</button></center></li>
				</ul>
				
			</div>
			<div class="col-2"></div>
		</div>
	</section>

	<section id="about" name="about">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-4" id="summary_text">
				<center><h1 style="font-size: 32px;">About Us</h1></center>
				<h3>The Los Angeles Chess Club (LACC) is one of the the most active chess clubs in the USA and hosts the strongest weekly tournament (LA Masters).</h3><h3>Operating on the premises of the Barrington Bridge Club</button>, LACC conducts weekly lectures and tournaments.</h3>
				<hr>
				<h3>Beginners are welcome!  Stop by for free consultation or join a group class or get a private chess lesson from one of our masters.</h3>
				
			</div>
			<div class="col-4" id="about_disp">
				
			</div>
			<div class="col-2"></div>
		</div>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-2">
				<button class="about_buttons">Club Schedule</button>
				<center><h3 style="margin:0px;">lectures / tournaments</h3></center>
				<button class="about_buttons">Group Classes &amp;<br>Private Lessons</button>
				<button class="about_buttons">Location</button>
				<hr style="margin: 20px;">
				<button id="history_button">history of the club ></button>
			</div>
			<div class="col-6" id="gm_shot">
				
			</div>
			<div class="col-2"></div>
		</div>
	</section>

	<section id="schedule" name="schedule">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-4">
				text
			</div>
			<div class="col-4">
				text
			</div>
			<div class="col-2"></div>
		</div>
	</section>

	<section id="classes" name="classes">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-4">
				text
			</div>
			<div class="col-4">
				text
			</div>
			<div class="col-2"></div>
		</div>
	</section>

	<section id="location" name="location">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-4">
				text
			</div>
			<div class="col-4">
				text
			</div>
			<div class="col-2"></div>
		</div>
	</section>

	<section id="contact_us" name="contact_us">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-4">
				text
			</div>
			<div class="col-4">
				text
			</div>
			<div class="col-2"></div>
		</div>
	</section>

	<section id="footer" name="footer">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-4">
				<p style="margin-top: 15px;margin-bottom: 10px;">Copyright &copy; 2017 LACC</p>
				<p style="margin-top: 8px;">coded by <a style="color:#48a9f9;" href="http://ivarcode.net/">Camden I. Wagner</a></p>
			</div>
			<div class="col-4">
				
			</div>
			<div class="col-2"></div>
		</div>
	</section>

</body>
</html>
