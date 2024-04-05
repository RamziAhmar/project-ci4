<?= view("layout/header") ?>
<div class="starter-template text-center py-5 px-3">
    <h1>Hai 
        <?= session()->get('nama'); ?>!
    </h1>
    <p class="lead">Selamat Datang di Belajar yang bener, Kita sudah belajar membuat Authentikasi dengan Codeigniter 4
    </p>
</div>
<?= view("layout/footer") ?>