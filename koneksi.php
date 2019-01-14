<?php
    $DSN = "mysql:host=localhost;dbname=3sc5";
    $user = "root";
    $con = new PDO($DSN,$user);

    $query = "insert into mahasiswa(no, nama, alamat) values(:no, :nama, :alamat)";
    $stmt = $con->prepare($query);
    // $stmt->execute(array(':no' => 333333,':nama' => 'saya',':alamat' => 'kemana'));
    // $no = 444444;
    // $nama = "kamu";
    // $alamat = "siapa";
    // $stmt->bindParam(":no", $no, PDO::PARAM_INT);
    // $stmt->bindParam(":nama", $nama, PDO::PARAM_STR);
    // $stmt->bindParam(":alamat", $alamat, PDO::PARAM_STR);
    // $stmt->execute();

    $query = "select * from mahasiswa";
    $stmt = $con->query($query);

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        printf("Detail Mahasiswa : %s (%s) <br>", $row['nama'], $row['alamat']);
    }
    
?>