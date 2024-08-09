<?php
$queryAbout = mysqli_query($koneksi, "SELECT * FROM profil ORDER BY id DESC");
if (isset($_POST['simpan'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $deskripsi = $_POST['deskripsi'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $twitter = $_POST['twitter'];
    $fb = $_POST['fb'];

    // print_r($queryAbout);
    // die;

    if (mysqli_num_rows($queryAbout) > 0) {
        // updated
        $id = mysqli_insert_id($koneksi);
        $update = mysqli_query($koneksi, "UPDATE profil SET 
        nama_lengkap = '$nama_lengkap', 
        alamat = '$alamat', 
        email = '$email', 
        deskripsi = '$deskripsi', 
        linkedin = '$linkedin',
        github = '$github', 
        twitter = '$twitter', 
        fb = '$fb',
        
        
        WHERE id = '1'");
        header("location:?pg=profil&edit=berhasil");
    } else {
        // insert
        $insert = mysqli_query(
            $koneksi,
            "INSERT INTO profil (nama_lengkap, alamat, email,deskripsi, linkedin, github, twitter, fb)
        VALUES ('$nama_lengkap','$alamat','$email','$deskripsi','$linkedin','$github','$twitter','$fb')"
        );
        header("location:?pg=profil&tambah=berhasil");
    }
}
$rowSetting = mysqli_fetch_assoc($queryAbout);
?>

<form action="" method="post">
    <div class="mb-3">
        <label for="">Nama Lengkap</label>
        <input value="<?= $rowSetting['nama_lengkap'] ?>" type="text" class="form-control" name="nama_lengkap"
            placeholder="Masukkan Universitas">
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input value="<?= $rowSetting['alamat'] ?>" type="text" class="form-control" name="alamat"
            placeholder="Fakultas">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input value="<?= $rowSetting['email'] ?>" type="email" class="form-control" name="email"
            placeholder="Masukkan jurusan">
    </div>
    <div class="mb-3">
        <label for="">Deskripsi</label>
        <textarea class="form-control" name="deskripsi"><?= $rowSetting['deskripsi'] ?></textarea>
    </div>
    <div>
        <label for="">Linkedin</label>
        <input value="<?= $rowSetting['linkedin'] ?>" type="url" class="form-control" name="linkedin"
            placeholder="Masukkan alamat linkedin">
    </div>
    <div>
        <label for="">Github</label>
        <input value="<?= $rowSetting['github'] ?>" type="url" class="form-control" name="github"
            placeholder="Masukkan alamat github">
    </div>
    <div>
        <label for="">Twitter</label>
        <input value="<?= $rowSetting['twitter'] ?>" type="url" class="form-control" name="twitter"
            placeholder="Masukkan alamat twitter">
    </div>
    <div>
        <label for="">Facebook</label>
        <input value="<?= $rowSetting['fb'] ?>" type="url" class="form-control" name="fb"
            placeholder="Masukkan alamat fb">
    </div>





</form>