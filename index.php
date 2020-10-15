<?php 
 
  session_start(); 
  $username = "";
  $email    = "";
  $errors = array(); 
  
  // connect to the database
  $db = mysqli_connect('sql206.unaux.com', 'unaux_26963682', 'uuz394ycetj8fht1', 'unaux_26963682_havi');
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></br>
		<p>SELECT YOUR DESIRED ITEM FROM THE LIST</p></br>
		<form method="post" action="item.php">
		<select  name="ite"><option default>SELECT ITEM</option>
		<?php
			$query=mysqli_query($db,"select * from items");
			while($row=mysqli_fetch_array($query))
		{
		?>
		<option><?php echo $row["item"];?></option>
		<?php
		}
		?>
		</select><br><br>
		<button type="submit" class="btn" name="submit">Submit</button>
		</form>
		<br><br>
		<p>If your desired item is not available in the list, please enter your desired item</p>
		<br>
		<form method="post" action="insert.php">
		<input type="text" size=15 name="di" >
	
	  <div class="input-group">
  	  <button type="submit" class="btn" name="submit">Submit</button></div>
		</form>
    	<br><br><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>