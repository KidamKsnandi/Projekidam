<?php
include "koneksi.php";
 
class query extends Dbkoneksi {
    public function login($email, $pass){

        $sql = mysqli_query($this->koneksi, "SELECT * FROM loginn WHERE email= '$email' AND pass='$pass'");

        if(mysqli_num_rows($sql) == 1){
             $row = mysqli_fetch_assoc($sql);
            return $row['id'];
        }
        else{
            return false;
        }
    }
        
    public function details($sql){

        $query = $this->koneksi->query($sql);
        
        $row = $query->fetch_array();
            
        return $row;       
    }

    public function tampil_inventaris() {
        $sql = mysqli_query($this->koneksi, "SELECT * FROM inventaris JOIN lokasi_brg ON inventaris.id_lokasi
       = lokasi_brg.id");
       while ($data = mysqli_fetch_array($sql)){
        $hasil[] = $data;
    } 
    return $hasil;
}

    public function tampil_inven()
	{
		$sql = mysqli_query($this->koneksi,"SELECT * FROM inventaris");
		while($data = mysqli_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}

    public function tampil_gudang() {
        $sql = mysqli_query($this->koneksi, "SELECT * FROM gudang JOIN inventaris ON inventaris.id = 
        gudang.id_inven");
        while ($data = mysqli_fetch_assoc($sql)){
            $hasil[] = $data;
    }
    return $hasil;
}

    public function get_lokasi() {
        $sql = mysqli_query($this->koneksi,"SELECT * FROM lokasi_brg");
        while ($data = mysqli_fetch_assoc($sql)) {
            $hasil[] = $data;
    }
    return $hasil;
}

    public function get_inventaris() {
        $sql = mysqli_query($this->koneksi,"SELECT * FROM inventaris");
          while ($data = mysqli_fetch_assoc($sql)) {
              $hasil[] = $data;
        }
        return $hasil;
    }


    public function get_kondisi() {
        $sql = mysqli_query($this->koneksi,"SELECT * FROM kondisi");
          while ($data = mysqli_fetch_assoc($sql)) {
              $hasil[] = $data;
          }
          return $hasil;
    }

    public function simpan_inven($nama,$tanggal,$merk,$stock,$satuan,$lokasi) {
        $sql = mysqli_query($this->koneksi, "INSERT INTO inventaris VALUES (
            '','$nama','$tanggal','$merk','$stock','$satuan','$lokasi') ");
    }

    public function simpan_gudang($nama,$tgl, $kondisi) {
        $sql = mysqli_query($this->koneksi, "INSERT INTO gudang VALUES (
            '','$nama','$tgl', '$kondisi') ");
    }

    function get_tanggal($tanggal)
	{
		$query = mysqli_query($this->koneksi,"select * from inventaris where tanggal='$tanggal'");
		return $query->fetch_array();
	}
	function update_data($nama,$tanggal,$merk,$stock,$satuan)
	{
		$query = mysqli_query($this->koneksi,"update inventaris set nama_brg='$nama',tanggal='$tanggal',
        merk='$merk',stock='$stock',satuan='$satuan' where tanggal='$tanggal'");
	}

    public function hapus_inventaris($tanggal)
{
    $sql = mysqli_query($this->koneksi,"delete from inventaris where tanggal='$tanggal'");
}

    public function hapus_gudang($tgl)
{
    $sql = mysqli_query($this->koneksi,"delete from gudang where tgl='$tgl'");
}


    // function tampil_data()
	// {
	// 	$data = mysqli_query($this->koneksi,"select * from tb_barang");
	// 	while($row = mysqli_fetch_array($data)){
	// 		$hasil[] = $row;
	// 	}
	// 	return $hasil;
	// }
}