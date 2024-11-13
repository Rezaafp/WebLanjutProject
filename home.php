<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Beranda</title>
	<style>
    body
    {
        background-color: darkblue;
       
    }
	.nav2
{
    overflow: visible;
    z-index: 99999;
    width: 100%;
    height: 60px;
    border: 1px;
    line-height: 30px;
    background-color: rgb(255, 73, 73);
    position: relative;
    
}
.nav2 ul li
{
   
    padding: 3px;
    width: 25%;
    height: 60px;
    float: left;
    list-style: none;
    text-align: center;
    background-color: rgb(255, 73, 73);
}
.nav2 ul li:hover ul
{
    
    display: block;
    width: 100%;
    height: 30px;
    padding: 3px;
    
}
.nav2 ul li ul
{
    display: none;
}
.nav2 ul li ul li
{
    width: 100%;
    height: 30px;
    border: 1px;
}
.nav2 ul li:hover
{
    background-color: whitesmoke;
    color: blue;
    font-weight: bold;

}
.nav2 ul li:active
{
    background-color: whitesmoke;
}
.nav2 ul,li
{
    color: white;
    text-align: center;
}

.page-header
{
    background-color: blue;
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
img
{
	height: 200px;
	width:200px;
    padding-top: 20px;
}
.jumbotron
{
	background: url('64.jpeg');
    height: 250px;

    
}
	</style>
  </head>
  <body>
	<div class = "jumbotron"id= "text-center">
		<center>
		<img src = "1.png" class="img-circle">
		<?php
		echo '<script type ="text/JavaScript">';  
		echo 'alert("selamat datang ")';  
		echo '</script>';  

		$user=@$_GET["username"];
		$pass=@$_POST["tpass"];
		echo "<h1> $user <h1>";
		?>
	</div>


	<div class="dokumentasi" id="dokumentasi">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
         
        </div>
      </div>
      <div class="row">
        <div class="nav2">
           <ul>
            
               <a href="index.php"><li>Beranda</li></a>
               <a href="indexbrg.php"><li>Barang</li></a>
               <a href="indexuser.php"><li>User</li></a>
               <a href="login.php"><li>Log out</li></a>
           </ul>
           </div>
      </div>
	  
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