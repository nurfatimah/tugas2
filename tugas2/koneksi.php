<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'toor',"akademik");
    
    // production
    $kon = mysqli_connect("localhost", "id8941132_dimas",'123456',"id8941132_akademik");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>