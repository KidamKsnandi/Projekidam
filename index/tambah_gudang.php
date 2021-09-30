<?php 
session_start();
include '../sql.php';
$data = new query();
$tampil = $data->get_inventaris();
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
   <link rel="stylesheet" href="../style/style6.css">
   <form method="POST" action="../proses.php?action=simpangudang">
      <div class="container">
          <div class="card">
              <div class="card-header">
                <h1>Tambah Barang Gudang</h1>
              </div>
              <div class="card-body">
              <div class="form-group row">
                <label class="col-sm-2 "></label> 
                <div class="col-sm-10">
                <select class="form-control" name="nama" required>
                    <?php 
                    foreach($tampil as $data) {
                        echo '<option value= "'.$data['id'].'">'.$data['nama_brg'].'-'.$data['merk'].'</option>';
                    }
                    ?> 
                </select>
                </div>
                </div>
                <div class="form-input">
                <input type="date" name="tgl" required>
                </div>
                <div class="form-group row">
                <label class="col-sm-2 "></label> 
                <div class="col-sm-10">
                <select class="form-control" name="kondisi" required>
                    <option value="">Kondisi</option>
                    <option value= "Bagus">Bagus</option>;
                    <option value= "Rusak">Rusak</option>;
                </select>
                </div>
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
