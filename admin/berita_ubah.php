<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Edit Berita</title>
</head>

<body>
    <?php
    include 'config.php';
    $berita_id = $_GET['berita_id'];
    $sql = "SELECT * FROM berita WHERE berita_id=$berita_id";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
    ?>
    <h2>Edit Berita</h2>
    <form method="POST" action="berita_ubah_action.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td width="100">Judul Berita</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="berita_id" value="<?php echo $data['berita_id'] ?>">
                    <input type="text" name="judul" size="50" value="<?php echo
                        $data['berita_judul'] ?>">
                </td>
            </tr>
            <tr>
                <td>Isi Berita</td>
                <td>:</td>
                <td><textarea name="isi" rows="6" cols="45"><?php
                echo $data['berita_isi'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar"> </td>
            </tr>
            <tr>
                <td>Nama User</td>
                <td>:</td>
                <td><input type="text" name="user_nama" size="50" value="<?php echo
                    $_SESSION['username']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="simpan" value="simpan">
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>