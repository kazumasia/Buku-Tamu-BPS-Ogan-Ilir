<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/css/styles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/footer.css" rel="stylesheet">



</head>
<style>
    .carousel-item {}
</style>

<body>

    <section id="hero">

        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">


                    <div class="carousel-item active" style="">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <img width="250" src="<?= base_url(); ?>img/logo_pst.png" />
                                <h2 class="animate__animated animate__fadeInDown">Silahkan Menuju Pelayanan Statistik
                                    Terpadu
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Terima Kasih Sudah Berkunjung </p>
                                <a href="<?= base_url('user/index'); ?>"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Oke</a>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </section><!-- End Hero -->
</body>
<script src="<?= base_url(); ?>/js/landing.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>/js/sb-admin-2.js"></script>

</html>