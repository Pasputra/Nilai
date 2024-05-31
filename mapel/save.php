<?php
if (isset($_POST['simpan'])){
    include_once('config.php');
    $mapel = $_POST ['mapel'];
    $jam_pelajaran = $_POST ['jam_pelajaran'];

    $sql = "INSERT INTO mapel SET mapel ='$mapel', jam_pelajaran ='$jam_pelajaran'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header ('location: index.php?m=mapel&s=view');
    } else {
        include "index.php";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';    
    }
}