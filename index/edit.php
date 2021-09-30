<?php 
session_start();
include '../sql.php';
$data = new query();
$data_barang = $_GET['id'];
if(! is_null($data_barang))
{
	$data_barang = $data->get_tanggal($data_barang);
}
else
{
	header('location:inventaris.php');
}
?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>

      <title>Login</title>
   </head>
   <body>
   <link rel="stylesheet" href="../style/style4.css">
   <form method="POST" action="../proses.php?action=update">
   <input type="hidden" name="id_barang" value="<?php echo $data_barang['tanggal']; ?>"/>
      <div class="container">
          <div class="card">
              <div class="card-header">
                <h1>Tambah Barang</h1>
              </div>
              <div class="card-body">
                <div class="form-input">
                <input type="text" name="nama" value="<?php echo $data_barang['nama_brg']; ?>" required/>
                </div>
                <div class="form-input">
                <td><input type="date" name="tanggal" value="<?php echo $data_barang['tanggal']; ?>" required/></td>
                </div>
                <div class="form-input">
                <input type="text" name="merk" value="<?php echo $data_barang['merk']; ?>" required/>
                </div>
                <div class="form-input">
                <input type="number" name="stock" value="<?php echo $data_barang['stock']; ?>" required/>
                </div>
                <div class="form-input">
                <input type="text" name="satuan" value="<?php echo $data_barang['satuan']; ?>"/>
                </div>
                <div class="form-button">
                <a type submit class="btn btn-danger" href="inventaris.php">Batal</a>
                <button class="btn btn-warning" type="submit" name="simpan">Simpan</button>
                </div>
              </div>
              <div class="card-footer">
                  Created By Kidam Kusnandi
              </div>
         </div>
      </div>
      </form>
   </body>
</html>
<!-- 
<?php 	
include 'sql.php';
$db = new query();
$data_barang = $_GET['id'];
if(! is_null($data_barang))
{
	$data_barang = $db->get_tanggal($data_barang);
}
else
{
	header('location:tampil_data.php');
}

?>