<Html>

<head>
	<style>
		body
		{
			background: url('home2.jpg');
			background-size: cover;
			font-family: Times New Roman;
			color: white;
		}
		ul
		{
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul li
		{
			float: left;
			width: 150px;
			height: 40px;
			background-color: black;
			opacity: .8;
			line-height: 40px;
			font-size: 23px;
			text-align: center;
			margin-right: 2px;
		}
		ul li a
		{
			text-decoration: none;
			color: white;
			display: block;
		}
		ul li a:hover
		{
			background-color: #990000;
		}
		ul li ul li
		{
			display: none;
		}
		ul li:hover ul li
		{
			display: block;
		}
	</style>
</head>

<body>

	<ul>
		<li><a href="Homepage.php">HOME</a></li>
		<li><a>Login</a>
			<ul>
				<li><a href="nurselogin.php">Nurse</a></li>
				<li><a href="adminlogin.php">Admin</a></li>
			</ul>
		</li>
		<li><a>Updates</a>
			<ul>
				<li><a href="#">University</a></li>
				<li><a href="general.php">General News</a></li>
			</ul>
		</li>
	</ul>
<br><br>
<p>
	<Font size="4">
	<b><u>Announcements</u></b>
</p>
<p>
	<em>E library access awareness training</em><br>
	The E library services, There will be Zoom webinar.<br>
	when: May 6, 2021 02:00 PM<br>
	<br>Click on the link below to join the webinar:<br>
	<a href="https://zoom.us/j/95553804393?pwd=NHovVW4wRGFnVEc4a1VEaVRKWW9HQT09"><em>https://zoom.us/j/95553804393?pwd=NHovVW4wRGFnVEc4a1VEaVRKWW9HQT09
	</em></a>
	
	</Font>
</p>
</body>


</Html>