<?php

$querry = mysqli_query($koneksi, "SELECT * FROM pendidikan ORDER BY id ASC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM pendidikan WHERE id ='$id'");
    header('location:?pg=pendidikan&hapus=berhasil');
}
?>
<div class="mb-3" align="right">
    <a href="?pg=tambah-pendidikan" class="btn btn-primary">Tambah Pendidikan</a>
</div>
<table class="table table-border">
    <thead>
        <tr>
            <th>No</th>
            <th>Universitas</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>GPA</th>
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
                <td><?php echo $row['univ'] ?></td>
                <td><?php echo $row['fakultas'] ?></td>
                <td><?php echo $row['jurusan'] ?></td>
                <td><?php echo $row['gpa'] ?></td>
                <td><?php echo $row['periode'] ?></td>
                <td><a href="?pg=tambah-pendidikan&edit=<?php echo $row['id']; ?>" class="btn btn-xs btn-success">Edit</a>|
                    <a onclick="return confirm('apakah anda yakin untuk menghapus data ini?')" href="?pg=pendidikan&delete=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
                </td>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>