</p
include('koneksi.php')

$query ="INSERT INTO pengguna (nama.u username, password, alamat, nohp" VALUES (?,?,?,?,?);

$stmt = mysqli_prepare($conn, $query);


if ($stmt){


$nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];   
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
   

    mysqli_stmt_bind_param($stmt,'ssss' ,$nama,$username,$password,$alamat,$nohp);

    if (mysqli_stmt_execute($stmt)){
        echo "<script>
        alert ('data berhasil ditambahkan');
        window.location.href = '../../tambahpengguna.php';
        </script>";


    } else {
        echo "<script>
            alert ('data gagal ditambahkan');
            window.location.href = '../../tambahpengguna.php';
        
        </script>"
    }

}else {
    echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI','DATA'=>[]]);
}












?>