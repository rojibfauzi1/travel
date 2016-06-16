<?php

if(isset($_POST['kirim'])){
  $id = $_POST['id'];

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];
 
  $tanggal =  date('Y-m-d H:i:s');

/* print_r($_POST);
 die();*/


 $sql = "INSERT INTO kritiksaran
  VALUES ('$id','$nama','$email','$pesan','$tanggal')";
  $s = $conn->query($sql);
  if($s){
    
    echo "<script>alert('Terimakasih Telah memberi saran');</script>";
    
  }
}/*else{

 
 $sql = "INSERT INTO kritiksaran
  VALUES ('$id','$nama','$email','$pesan','$tanggal')";
  $s = $conn->query($sql);
  if($s){
  	
    echo "<script>alert('Terimakasih Telah memberi saran');</script>";
    
  }else{
  echo "<script>alert('Data Gagal Dimasukkan');</script>";
}*/


?>
<?php ob_flush(); ?>


