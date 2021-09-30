<?php
class Dbkoneksi{

    var $db_host = 'localhost';
    var $db_user = 'root';
    var $db_pass = '';
    var $db_name = 'projekidam';
    
    public $koneksi;
    
    public function __construct(){

        $this->koneksi = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if ($this->koneksi) {
            //  echo "berhasil";
        } else {
			echo "ERROR";
		}   
        
        return $this->koneksi;
    }
} 
//  $db_host = "localhost";
// 	 $db_user = "root";
// 	 $db_pass = "";
// 	 $db_name = "mencoba";
// 	 $koneksi = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
// 		if ($koneksi){
// 			// echo "Berhasil";
// 		} else {
//             echo "ERROR";
//         }
?>