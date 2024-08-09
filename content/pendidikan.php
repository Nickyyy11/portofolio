<?php

// include 'admin/koneksi/koneksi.php';

$queryEdu = mysqli_query($koneksi, "SELECT * FROM pendidikan LIMIT 7");
// $rowEdu = mysqli_fetch_assoc($queryEdu);
?>

<section class="resume-section" id="education">
    <div class="resume-section-content">

        <h2 class="mb-5">Education</h2>
        <?php $no = 1;
        while ($rowEdu = mysqli_fetch_assoc($queryEdu)) : ?>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0"><?= $rowEdu['univ'] ?></h3>
                <div class="subheading mb-3"><?= $rowEdu['fakultas'] ?></div>
                <div><?= $rowEdu['jurusan'] ?></div>
                <p><?= $rowEdu['gpa'] ?></p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary"><?= $rowEdu['periode'] ?></span></div>
        </div>
        <?php endwhile; ?>
    </div>


</section>