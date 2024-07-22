<?php
include 'Buku.php';
$db = new database();
?>
<h3>Edit Data Buku</h3>
<form action="proses_buku.php?aksi=update_buku" method="post">
<?php
foreach($db->edit_buku($_GET['id']) as $d){
?>
    <table>
        <tr>
            <td>ID Buku</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" name="id" value="<?php echo $d['id'] ?>">
            </td>
        </tr>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value="<?php echo $d['judul'] ?>"></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" value="<?php echo $d['pengarang'] ?>"></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="text" name="tahun_terbit" value="<?php echo $d['tahun_terbit'] ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" value="<?php echo $d['harga'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Simpan" >
            </td>
        </tr>
    </table>
    <?php
}
?>
</form>