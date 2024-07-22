<h3>Tambah Data Buku</h3>
<form action="proses_buku.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>ID Buku</td>
            <td><input type="text" name="id" id=""></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" id=""></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" id=""></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="text" name="tahun_terbit" id=""></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Simpan" >
            </td>
        </tr>
    </table>
</form>