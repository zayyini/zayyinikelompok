<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Berita</title>
</head>

<body>
    <p align="left">Anda Login Sebagai "
        <?php echo
            $_SESSION['username']; ?>" | Klik <a href="logout.php">disini</a> untuk logout.
    </p>
    <h3>Data Berita</h3>
    <p><a href="berita_tambah.php">[+Tambah Berita]</a> </p>
    <table width='900' border='1' cellpadding="5" cellspacing="0">
        <tr>
            <th width='30'>No.</th>
            <th width='100'>Judul Berita</th>
            <th width='300'>Isi Berita</th>
            <th width='200'>Tanggal Upload</th>
            <th width='350'>Gambar</th>
            <th width="100">Kelola</th>
        </tr>
        <?php
        include "config.php";
        $sql = "SELECT berita_id, berita_judul, berita_isi,
berita_tanggal, berita_gambar FROM berita ORDER BY berita_id";
        $hasil = mysqli_query($config, $sql);
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>
                <td>
                    <?php echo $data['berita_judul'] ?>
                </td>
                <td>
                    <?php echo $data['berita_isi'] ?>
                </td>
                <td>
                    <?php echo $data['berita_tanggal'] ?>
                </td>
                <td><img src="<?php echo $data['berita_gambar'] ?>" width="100%"></td>
                <td align="center">
                    <a href="berita_ubah.php?berita_id=<?php echo
                        $data['berita_id']; ?>">Edit</a> |
                    <a href="berita_hapus.php?berita_id=<?php echo
                        $data['berita_id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
            $no++;
        }
        echo "</table>";
        ?>
</body>

</html>