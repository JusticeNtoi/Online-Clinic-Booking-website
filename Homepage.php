<Html>

<head>
	<style>
		body
		{
			background: url('start.png');
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
		<li><a>HOME</a></li>
		<li><a>Login</a>
			<ul>
				<li><a href="nurselogin.php">Nurse</a></li>
				<li><a href="adminlogin.php">Admin</a></li>
			</ul>
		</li>
		<li><a>Updates</a>
			<ul>
				<li><a href="university.php">University</a></li>
				<li><a href="general.php">General News</a></li>
			</ul>
		</li>
	</ul>

</body>


</Html>