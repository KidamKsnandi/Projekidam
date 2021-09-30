<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <title>HOME</title>
</head>
<body>
<link rel="stylesheet" href="../style/style1.css">
    <?php 
      include "cek.php";
      include "../sql.php";
      $user = new query();
    // $user = $koneksi->query("SELECT * FROM adminn  WHERE id='".$_COOKIE["id"]."'")->fetch_assoc();

$sql = "SELECT * FROM loginn WHERE id = '".$_COOKIE['id']."'";
$row = $user->details($sql);
$tampil = $user->tampil_inventaris();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img src="../img/logo.png" height="100px" >
  <a href="home.php">HOME</a>
  <a href="inventaris.php">Inventaris</a>
  <a href="gudang.php">Gudang</a>
  <a href="../logout.php">Keluar</a>
</div>
<div class="navnav">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Hi <?=$row["username"]?>!</span>
</div>
<div class="head">
<h1>Inventaris Lab dan Bengkel SMK Assalaam</h1>
<img src="../img/logo.png" height="150px">


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="container">
<div class="card">
  <div class="card-header">
  <h3>Daftar Barang Lab Dan Bengkel SMK Assalaam</h3>
  </div>
  <div class="card-body">
  <table border=1 class="table">
      <thead>
       <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Tanggal</th>
        <th>Merk</th>
        <th>Stock</th>
        <th>Satuan</th>
        <th>Lokasi</th>
       </tr>
      </thead>
      <tbody>
      <?php  
       $no = 1;
       foreach ($tampil as $inven) {
       echo "<tr>";
       echo "<td>".$no++."</td>";
         echo "<td>".$inven['nama_brg'].  "</td>";
         echo "<td>".$inven['tanggal']."</td>";
         echo "<td>".$inven['merk']."</td>";
         echo "<td>".$inven['stock']."</td>";
         echo "<td>".$inven['satuan']."</td>";
         echo "<td>".$inven['lokasi']."</td>";
} ?>
</tbody>
</table>
   </div>
   <div class="card-footer">
      Created By Kidam Kusnandi
  </div>
  </div>
</div>
</div>

</body>
</html>