<?php 
include "sql.php";
$proses = new query();

$action = $_GET['action'];
 if($action == "simpaninventaris")
{
    $proses->simpan_inven($_POST['nama'], $_POST['tanggal'],$_POST['merk'],$_POST['stock'],$_POST['satuan'],
    $_POST['lokasi']);
	header('location:index/inventaris.php');
} elseif($action=="update")
{
	$proses->update_data($_POST['nama'],$_POST['tanggal'],$_POST['merk'],$_POST['stock'],$_POST['satuan']);
	header('location:index/inventaris.php');
} elseif($action=="deleteinven")
{
	$tanggal = $_GET['id'];
	$proses->hapus_inventaris($tanggal);
	header('location:index/inventaris.php');
} elseif($action=="deletegudang")
{
	$tgl = $_GET['id'];
	$proses->hapus_gudang($tgl);
	header('location:index/gudang.php');
} elseif($action == "simpangudang")
{
    $proses->simpan_gudang($_POST['nama'], $_POST['tgl'], $_POST['kondisi']);
	header('location:index/gudang.php');
}
?>