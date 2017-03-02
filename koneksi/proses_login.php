<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$query = "SELECT * FROM pengguna WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

if ($password == $data['password'])
{
echo "<script> alert('Login Sukses');</script>";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['idpengguna'] = $data['idpengguna'];
    $_SESSION['namalengkap'] = $data['namalengkap'];
    $_SESSION['NPWP'] = $data['NPWP'];
    //Penggunaan Meta Header HTTP
    if ($data['level']=='bpn'){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../bpn/index.php">';    
    }else if($data['level']=='ppat'){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../ppat/index.php">';    
    }
    exit;
}
else 
echo "<script> alert('Proses Login Gagal Silahkan Melakukan Login Lagi');</script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php">';    
    exit;
?>