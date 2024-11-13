<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data User</title>
    <style>

    .table
    {
        margin-top:100px;
        width: 90%;
    }
    nav
{
    overflow: visible;
    width: 100%;
    height: 60px;
    border: 1px;
    line-height: 30px;
    background-color: red;
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
    background-color: red;
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
    background-color: red;
}
nav ul li:hover
{
    background-color: blue;
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

    <center>
  <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Kode user</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Telpon</th>
      <th scope="col">Password</th>
	  <th scope="col">Peran</th>
      <th colspan="2">Aksi</th>

    </tr>

  </thead>
  <tbody>
  <?php while($row = $this->model->fetch($data)){
				echo "
					<tr>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
            <td>$row[5]</td>
						<td><a href='indexuser.php?e=$row[0]'>Edit</a></td>
						<td><a href='indexuser.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\>Delete</a></td>
					</tr>
				";
			}?>

  </tbody>
</table>

<div class="btn-group" role="group" aria-label="Basic example">
  
<a href='indexuser.php?i=add'button type="button" class="btn btn-primary">Tambah Data</a></button></center>
  
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
</html>