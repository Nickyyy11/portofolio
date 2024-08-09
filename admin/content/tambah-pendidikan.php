<?php
if (isset($_POST['simpan'])) {
    $univ = $_POST['univ'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
    $gpa = $_POST['gpa'];
    $periode = $_POST['periode'];
    $insert = mysqli_query($koneksi, "INSERT INTO pendidikan (univ, fakultas, jurusan, gpa, periode) VALUES ('$univ', '$fakultas','$jurusan','$gpa','$periode')");
    header("location:?pg=pendidikan&insert=berhasil");
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_query($koneksi, "SELECT * FROM pendidikan WHERE id='$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}
if (isset($_POST['edit'])) {
    $univ = $_POST['univ'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
    $gpa = $_POST['gpa'];
    $periode = $_POST['periode'];
    $update = mysqli_query($koneksi, "UPDATE pendidikan SET univ='$univ', fakultas='$fakultas', jurusan='$jurusan',
    gpa='$gpa', keterangan='$' WHERE id='$id'");
    header("location:?pg=pendidikan&update=berhasil");
    // sebelum where tidak boleh ada tanda koma
}
?><form action="" method="post">
    <div class="mb-3">
        <label for="">Universitas</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['univ'] : '' ?>" type="text" class="form-control"
            name="univ" placeholder="Masukkan nama universitas">
    </div>
    <div class="mb-3">
        <label for="">Fakultas</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['fakultas'] : '' ?>" type="text" class="form-control"
            name="fakultas" placeholder="Masukkan nama fakultas">
    </div>
    <div class="mb-3">
        <label for="">Jurusan</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['jurusan'] : '' ?>" type="text" class="form-control"
            name="jurusan" placeholder="Masukkan nama jurusan">
    </div>
    <div class="mb-3">
        <label for="">GPA</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['gpa'] : '' ?>" type="text" class="form-control"
            name="gpa" placeholder="Masukkan gpa">
    </div>
    <div class="mb-3">
        <label for="">Periode</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['periode'] : '' ?>" type="text" class="form-control"
            name="periode" placeholder="contoh:December 2011 - March 2013 ">
    </div>

    <div class="mb-3">
        <input type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" value="Simpan"
            class="btn btn-primary">
        <a href="?pg=pendidikan">Kembali</a>
    </div>
</form>