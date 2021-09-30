<?php 
session_start();
include 'cek.php';
include 'koneksi.php';
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
   <link rel="stylesheet" href="style/style.css">
        <form action="plogin.php" method="POST">
      <div class="container">
          <div class="card">
              <div class="card-header">
                <h1>Login Admin</h1>
              </div>
              <div class="card-body">
              <?php
                if(isset($_SESSION["pesan"])) {
            ?><div class="pesan"> <?php  echo $_SESSION["pesan"];?></div> 
            <?php
                unset ($_SESSION["pesan"]);
}
?>

                <div class="form-input">
                <i class="fa fa-envelope"></i>
                <input type="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-input">
                <i class="fa fa-lock"></i>
                <input type="password" name="pass" placeholder="Masukkan Password" required>
                </div>
                <div class="form-button">
                <button type="submit" name="login">Login</button>
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