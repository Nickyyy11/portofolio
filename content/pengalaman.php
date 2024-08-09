<?php
$queryExperience = mysqli_query($koneksi, "SELECT * FROM pengalaman LIMIT 7");
// $rowEx = mysqli_fetch_assoc($queryExperience);
?>

<section class="resume-section" id="experience">
    <div class="resume-section-content">
        <h2 class="mb-5">Experience</h2>
        <?php while ($rowEx = mysqli_fetch_assoc($queryExperience)) : ?>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <!-- DB = Jabatan,Divisi,jobdesk, -->
                <h3 class="mb-0"><?= $rowEx['jabatan'] ?></h3>
                <div class="subheading mb-3"><?= $rowEx['divisi'] ?></div>
                <p><?= $rowEx['deskripsi'] ?></p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary"><?= $rowEx['periode'] ?></span></div>
        </div>
        <?php endwhile ?>

</section>