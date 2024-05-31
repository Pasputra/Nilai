<?php
if (isset($_POST['update'])){
    include_once('config.php');
    $id = $_POST['id'];
    $mapel = $_POST ['mapel'];
    $jam_pelajaran = $_POST ['jam_pelajaran'];

    $sql = "UPDATE mapel SET mapel ='$mapel', jam_pelajaran ='$jam_pelajaran' WHERE id= '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header ('location: index.php?m=mapel&s=view');
    } else {
        include "index.php?m=mapel&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';    
    }
}