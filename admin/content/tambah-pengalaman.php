<?php
if (isset($_POST['simpan'])) {
    $jabatan = $_POST['jabatan'];
    $divisi = $_POST['divisi'];
    $deskripsi = $_POST['deskripsi'];
    $periode = $_POST['periode'];
    $insert = mysqli_query($koneksi, "INSERT INTO pengalaman 
    (jabatan, divisi, deskripsi, periode) VALUES ('$jabatan', '$divisi','$deskripsi','$periode')");
    header("location:?pg=pengalaman&insert=berhasil");
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_query($koneksi, "SELECT * FROM pengalaman WHERE id='$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}
if (isset($_POST['edit'])) {
    $jabatan = $_POST['jabatan'];
    $divisi = $_POST['divisi'];
    $deskripsi = $_POST['deskripsi'];
    $periode = $_POST['periode'];
    $update = mysqli_query($koneksi, "UPDATE pengalaman SET 
    jabatan='$jabatan', divisi='$divisi', deskripsi='$deskripsi',periode='$periode' WHERE id='$id'");
    header("location:?pg=pengalaman&update=berhasil");
    // sebelum where tidak boleh ada tanda koma
}
?><form action="" method="post">
    <div class="mb-3">
        <label for="">Jabatan</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['jabatan'] : '' ?>" type="text" class="form-control" name="jabatan" placeholder="Masukkan nama Jabatan">
    </div>
    <div class="mb-3">
        <label for="">Divisi</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['divisi'] : '' ?>" type="text" class="form-control" name="divisi" placeholder="Masukkan nama Divisi">
    </div>
    <div class="mb-3">
        <label for="">Deskripsi</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['deskripsi'] : '' ?>" type="text" class="form-control" name="deskripsi" placeholder="Masukkan nama Deskripsi">
    </div>
    <div class="mb-3">
        <label for="">Periode</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['periode'] : '' ?>" type="text" class="form-control" name="periode" placeholder="contoh:December 2011 - March 2013 ">
    </div>

    <div class="mb-3">
        <input type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" value="Simpan" class="btn btn-primary">
        <a href="?pg=pengalaman">Kembali</a>
    </div>
</form>