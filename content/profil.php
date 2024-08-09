<?php
$queryProfil = mysqli_query($koneksi, "SELECT * FROM profil LIMIT 1");
$rowProfil = mysqli_fetch_assoc($queryProfil);
?>


<section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
            <?= $rowProfil['nama_lengkap'] ?>

        </h1>
        <div class="subheading mb-5">
            <?= $rowProfil['alamat'] ?>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= $rowProfil['email'] ?>"
                target="_blank"><?= $rowProfil['email'] ?></a>
        </div>
        <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for
            high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to
            further the overall value proposition.</p>
        <div class="social-icons">
            <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
            <a class="social-icon" href="#!"><i class="fa-regular fa-envelope"></i></a>
            <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
            <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</section>