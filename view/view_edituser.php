<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Ubah</title>
    <style>
        form
        {
            margin-left: 310px;
        }
        .container
        {
            margin-top: 35px;
            
        }
        .prakata
        {
            margin-left: 180px;
        }
        nav
{
    overflow: visible;
    width: 100%;
    height: 60px;
    border: 1px;
    line-height: 30px;
    background-color: skyblue;
    position: relative;
}
nav ul li
{
   
    padding: 3px;
    width:100%;
    height: 60px;
    float: left;
    list-style: none;
    text-align: center;
    background-color: skyblue;
}
nav ul li:hover ul
{
    z-index: 99999;
    display: block;
    width: 100%;
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
    background-color: skyblue;
}
nav ul li:hover
{
    background-color: whitesmoke;
    color: blue;
    font-weight: bold;

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
    </style>
  </head>
  <body>
     <!--Navbar-->
   <section class="menu" id="menu">
    <div class="container">
<div class="row">
    <div class="col-sm-12">
 
<nav class="navbar navbar-light bg-danger fixed-top">
 <div class="container-fluid">
   <a class="navbar-brand" href="#"></a>
   <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
     <div class="offcanvas-header">
       <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
       <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="indexbrg.php">Barang</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="indexuser.php">User</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="login.php">LogOut</a>
        </li>
            
           </ul>
         </li>
     </section>
 </div>
     </div>
     </div>
     </div>
   </div>
 </div>
</nav>
   <!--Akhir Navbar-->
  
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

  <form action="" method="post">
  <div class="col-md-6">
    <label for="kode_user">Kode User</label>
    <input type="text" class="form-control" name="kode_user" value="<?=$row[0]?>" readonly />
  </div>
  <div class="col-md-6">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" value="<?=$row[1]?>"/>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" name="email"value="<?=$row[2]?>"/>
  </div>
  <div class="col-md-6">
    <label for="telp" class="form-label">Telpon</label>
    <input type="text" name="telp" class="form-control"value="<?=$row[3]?>"/>
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" name="password"value="<?=$row[4]?>"/>
  </div>
  <div class="col-md-6">
    <label for="peran" class="form-label">Peran</label>
    <input type="text" class="form-control" name="peran"value="<?=$row[5]?>"/>
  </div>
    <br>
    
  <div class="col-md-6">
    <button type="submit" input type="submit" class="btn btn-primary" value="simpan" name="submit">Simpan</button>
  </div>
</form>  

</div>

<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update();

    echo "daftar barang telah di rubah"; 
    echo "<meta http-equiv=refresh content=1;URL='indexuser.php'>";  
}
?>
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