<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login</title>
	    <style>
			form
			{
				width: 20%;
			}
			img
			{
				height: 120px;
				width:120px;
				
			}
			.container
			{
				margin-top: 60px;
				
			}
			.prakata
			{
				margin-left: 300px;
				
			}
      nav
{
    overflow: visible;
    width: 100%;
    height: 60px;
    border: 1px;
    line-height: 30px;
    background-color: brown;
    position: relative;
}
nav ul li
{
   
    padding: 3px;
    width: 50%;
    height: 60px;
    float: left;
    list-style: none;
    text-align: center;
    background-color: brown;
}
nav ul li:hover ul
{
    z-index: 99999;
    display: block;
    width: 50%;
    height: 30px;
    padding: 3px;
    
}
nav ul li ul
{
    display: none;
}
nav ul li ul li
{
    width: 100%;
    height: 30px;
    border: 1px;
}
nav ul li:hover
{
    background-color: whitesmoke;
    color: blue;
    font-weight: bold;
    width: 50%;
    
}

nav ul li:active
{
    background-color: whitesmoke;
}
nav ul,li
{
    color: white;
    text-align: center;
}
.page-header
{
    background-color:skyblue;
    margin: 0px;
    padding: 0px;
    line-height: 0px;
    width: 100%;
    height: 100px;
    overflow: hidden;
}
.page-header h1
{
    text-align: center;
    padding-top: 13px;
}
		</style>
  </head>
  <body>
  <div class="page-header">
    <h1>Login </h1>
    </div>
  <div class="nav">
    <nav>
     <ul>       
         <a href="index.php"><li>Beranda</li></a>
         <a href="latihan13.php"><li>Login</li></a>
         
       
         </li>
     </ul>
     </div>

    


  <div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h2></h2><br>
    </div>
  </div>
</div>
 <section class="prakata" id="prakata">
  <div class="container">
  <div class="row">

  
  <div class="row">
  <div class="col-sm-12">
<body style="background-color: rgb(242, 255, 240);"></body>
<div style="background-color:rgb(194, 185, 108);color: white;padding: 26px;width: 80%">
 <center>
  <img src= "1.png">
  <br><br>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-floating mb-3">
   
  <input type="text" class="form-control" name="tuser" placeholder=" "required>
  <label style="color: black" for="tuser">user</label>
   </div>
  
   <div class="form-floating mb-3">
  <input type="password" class="form-control" name="tpass" placeholder=" "required>
  <label style="color: black" for="tpass">Password</label>
   </div>
		
   <div class="col-12">
    <button type="submit" class="btn btn-primary">Login</button>
  </div>
  </form>
  
  <?php
  if(isset($_POST["tuser"])){
    $user=$_POST["tuser"];
    $pass=$_POST["tpass"];
    if($user=="admin" && $pass=="123"){
      setcookie("username",$user);
      header("location:home.php?username=$user"); 
    }
    if($user!="admin"){
      if($user!="")
      echo "<div>user tidak valid...</div>";
    }

  }
  ?>
  </center>

 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>