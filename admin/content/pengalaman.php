<?php
include '../admin/koneksi/koneksi.php';
$querry = mysqli_query($koneksi, "SELECT * FROM pengalaman ORDER BY id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM pengalaman WHERE id ='$id'");
    header('location:?pg=pengalaman&hapus=berhasil');
}
?>
<div class="mb-3" align="right">
    <a href="?pg=tambah-pengalaman" class="btn btn-primary">Tambah Pengalaman</a>
</div>
<table class="table table-border">
    <thead>
        <tr>
            <th>No</th>
            <th>Jabatan</th>
            <th>Divisi</th>
            <th>Deskripsi</th>
            <th>Periode</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        while ($row = mysqli_fetch_assoc($querry)) : ?>
            <!-- mysqli_fetch_assoc($querry) digunakan untuk mengambil atau memunculkan data -->
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['jabatan'] ?></td>
                <td><?php echo $row['divisi'] ?></td>
                <td><?php echo $row['deskripsi'] ?></td>
                <td><?php echo $row['periode'] ?></td>
                <td><a href="?pg=tambah-pengalaman&edit=<?php echo $row['id']; ?>" class="btn btn-xs btn-success">Edit</a>|
                    <a onclick="return confirm('apakah anda yakin untuk menghapus data ini?')" href="?pg=pengalaman&delete=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
                </td>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>