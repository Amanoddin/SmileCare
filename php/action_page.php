<html>
	<head>
	<style>
		.background-img{
			  position: fixed;
  width: 100%;
  height: auto;
  color: white;
  padding: 15rem 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url("../assets/img/OP.jpeg");
  background-position: center;
  text-align:center;
  background-repeat: no-repeat;
  background-size: cover;
		}
	</style>	
	</head>
<body>
	<div class="background-img">
<h1>
Hi <?php echo $_POST["Firstname"]; ?> <?php echo $_POST["Lastname"]; ?>.<br>
</h1>
<h4>
We recieved your appointment request. You'll be contacted before <?php echo $_POST["datemax"]; ?>
<br>
You may recieve a confirmation email at <?php echo $_POST["email"]; ?>
<br>
Our executive would call at <?php echo $_POST["phone"]; ?> for knowing the details of issue.
<br>
<br>
Go to the home page through browser back button to explore more of the website.
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
Copyright &copy; SmileCare
<br>
<br>

Made by Shaikh Amanoddin
</h4>
</div>
</body>
</html>
