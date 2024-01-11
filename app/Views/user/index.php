<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPS Ogan Ilir</title>
    <link rel="icon" href="<?= base_url(); ?>/img/bps.png" type="image/png">

    <link href="<?= base_url(); ?>/css/landing.css" rel="stylesheet" type="text/css">

    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/css/styles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/css/feedback.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/boostrap-icon-min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/footer.css" rel="stylesheet">


    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body>
    <div class="cursor"></div>
    <div class="cursor-border"></div>
    <header>
        <a href="#home" class="logo"><img width="250" src="<?= base_url(); ?>img/bps.png" />
            Badan Pusat Statistik Kabupaten Ogan Ilir</a>

        <nav class="site-nav">
            <ul class="underline-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#form">Buku Tamu</a></li>
                <li><a href="#pengunjung">List Tamu BPS</a></li>

                <?php if (in_groups('admin')): ?>

                    <li>
                        <a href="<?= base_url('admin'); ?>">

                            Halaman Admin</a>
                    </li>


                <?php endif; ?>
                <li>
                    <a href="<?= base_url('logout'); ?>">
                        <i class="fas fa-fw fa-sign-out-alt"> </i> Logout</a>
                </li>

            </ul>
        </nav>
    </header>

    <input type="checkbox" id="burger-toggle" />
    <label for="burger-toggle" class="burger-menu">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    <div class="overlay"></div>
    <nav class="burger-nav">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#speakers">Speakers</a></li>
            <li><a href="#sponsors"></a></li>
        </ul>
    </nav>
    <main>
        <section class="hero-section" id="home">
            <!-- <div class="titles">
                <h1 class="staggered-rise-in">Selamat Datang Di </h1>
                <h1 class="staggered-rise-in">Badan Pusat Statistik Kabupaten Ogan Ilir</h1>
                <h2 class="cross-bar-glitch" data-slice="20">Silahkan Isi Buku Tamu</h2>
            </div> -->
            <div class="titles">
                <h1 class="cross-bar-glitch" data-slice="20">Selamat Datang Di </h1>
                <h1 class="cross-bar-glitch" data-slice="20">Badan Pusat Statistik Kabupaten Ogan Ilir</h1>
                <h2 class="staggered-rise-in">Silahkan Isi Buku Tamu</h2>
            </div>
            <h1 class="animate__animated animate__fadeInUp">

            </h1>

            <a class="btn btn-outline-light btn-through kotak" href="#form"><i class="bi bi-book"></i>
                Buku Tamu <span> </a>
        </section>
        <section class="normal-section" id="form">
            <div class="titles">
                <h1 class="cross-bar-glitch" data-slice="20">Form Buku Tamu</h1>
                <h2 class="staggered-rise-in">Badan Pusat Statistik Kabupaten Ogan Ilir</h2>
            </div>


            <div class="container">
                <form action="<?= base_url('PostController/store') ?>" method="POST" class="form-container">
                    <div class="container-fluid bg-transparent p-2 rounded" id="box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Contoh: Ahmad yani"
                                        name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Pilih Jenis Kelamin:</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Jenis Pekerjaan:</label>
                                    <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                                        <option value="">--Pilih Pekerjaan Anda--</option>
                                        <option value="ASN">ASN</option>
                                        <option value="Perangkat Desa">Perangkat Desa</option>
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Umum/Lainnya">Umum/Lainnya</option>
                                    </select>
                                </div>
                                <div id="lainnyaFieldsPekerjaan" style="display:none;" class="form-group">
                                    <label for="lainnyaDataPekerjaan">Pekerjaan Lainnya:</label>
                                    <input type="text" class="form-control" id="pekerjaan_lainnya"
                                        placeholder="Masukkan Pekerjaan Umum/lainnya Contoh: Petani atau Warga Lokal"
                                        name="pekerjaan_lainnya">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" id="email"
                                        placeholder="Contoh: yourname@gmail.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan Terakhir:</label>
                                    <select class="form-control" id="pendidikan" name="pendidikan" required>
                                        <option value="">--Pilih Pendidikan Anda--</option>
                                        <option value="SD/SMP/SMA Sederajat">SD/SMP/SMA Sederajat</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3/Lainnya</option>
                                        <option value="D4/S1 Sederajat">D4/S1 Sederajat</option>
                                        <option value="S2/S3 Sederajat">S2/S3 Sederakjat</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="keperluan">Pilih Keperluan:</label>
                                    <select class="form-control" id="keperluan" name="keperluan" required>
                                        <option value="">--Pilih Keperluan Anda--</option>
                                        <option value="PST">PST</option>
                                        <option value="Menemui Seseorang">Menemui Seseorang</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div id="lainnyaFieldsKeperluan" style="display:none;" class="form-group">
                                    <label for="lainnyaDataKeperluan">Keperluan Lainnya:</label>
                                    <input type="text" class="form-control" id="keperluan_lainnya"
                                        placeholder="Masukkan Keperluan Lainnya" name="keperluan_lainnya">
                                </div>
                                <div class="form-group">
                                    <label for="nomor">Nomor Telepon/Whatsapp:</label>
                                    <input type="text" class="form-control" id="nomor" placeholder="Contoh: 0812346567"
                                        name="no_telp" maxlength="15" required>
                                </div>



                            </div>

                            <div class="col-md-12 text-center mt-3">

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#myModal">Simpan</button>
                            </div>
                        </div>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark text-light">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi Data</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah data yang anda masukkan sudah benar?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Ya</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>



            </div>
        </section>
        <!-- Tabel pengunjung -->
        <section class="normal-section" id="pengunjung">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <form action="<?= base_url('PostController/filterTanggal') ?>" method="post">
                            <div class="form-group">
                                <label for="selected_date">Pilih Tanggal:</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" id="selected_date" name="selected_date"
                                        required>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- Form for searching -->
                <div class="row">


                    <div class="col-md-9">
                        <form action="<?= base_url('PostController/cari') ?>" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="search_query" name="search_query"
                                        placeholder="Enter keyword">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-3 md-9 text-right">
                        <button type="button" class="btn btn-primary text-right" data-toggle="modal"
                            data-target="#feedbackModal">
                            Feedback
                        </button>
                    </div>
                </div>




                <!-- Display the table of ongoing visitors -->
                <table class="table table-bordered mt-4">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Keperluan</th>
                            <th>Waktu Masuk</th>
                            <th>Waktu Selesai</th>
                            <th>Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ongoingVisitors as $visitor): ?>
                            <tr>
                                <td>
                                    <?= $visitor['nama']; ?>
                                </td>
                                <td>
                                    <?= $visitor['keperluan']; ?>
                                </td>
                                <td>
                                    <?= $visitor['created_at']; ?>
                                </td>
                                <td>
                                    <?= $visitor['waktu_keluar']; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary"
                                        onclick="finishVisit(<?= $visitor['id']; ?>)">
                                        Selesai
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>


        <!-- Notification Modal -->
        <div class="modal fade" id="notificationModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header">
                        <h4 class="modal-title" id="notificationTitle"></h4>
                    </div>
                    <div class="modal-body" id="notificationBody">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for completing visit -->
        <div class="modal fade" id="kunjunganModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Selesai</h4>
                    </div>
                    <div class="modal-body">
                        <p>Apakah kunjungan sudah selesai?</p>
                    </div>
                    <div class="modal-footer">
                        <?php if (!empty($visitor)): ?>
                            <!-- Ganti base_url dengan site_url -->
                            <a href="<?= site_url('PostController/completeVisit/' . $visitor['id']); ?>"
                                class="btn btn-primary" id="completeVisitButton">Selesai</a>
                        <?php endif; ?>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel"
            aria-hidden="true">

            <div class="modal-body">
                <!-- Form untuk mengisi feedback -->
                <form id="feedbackForm" action="<?= base_url('feedback/submitFeedback'); ?>" method="post">
                    <div id="panel" class="panel-container">
                        <strong>How satisfied are you with our <br /> customer support performance?</strong>
                        <div class="ratings-container">
                            <div class="rating" data-value="Puas">
                                <img src="<?= base_url(); ?>img/puas.svg" alt="">
                                <br />
                                <small>Puas</small>
                            </div>

                            <div class="rating" data-value="Tidak Puas">
                                <img src="<?= base_url(); ?>img/tidak.svg" alt="">
                                <br />
                                <small>Tidak Puas</small>
                            </div>
                        </div>
                        <input type="hidden" name="rating" id="rating" value="">
                        <label for="message">Suggestion (if not satisfied):</label>
                        <textarea class="form-control" name="message" id="message" rows="4" cols="50"></textarea>
                        <button type="submit" class="btn btn-primary kotak" id="send">Send Review</button>
                    </div>
                </form>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const ratings = document.querySelectorAll('.rating');
                        const ratingInput = document.getElementById('rating');

                        ratings.forEach((rating) => {
                            rating.addEventListener('click', () => {
                                const selectedValue = rating.getAttribute('data-value');
                                ratingInput.value = selectedValue;

                                removeActive();
                                rating.classList.add('active');
                            });
                        });

                        document.getElementById('feedbackForm').addEventListener('submit', function (e) {
                            const selectedRating = document.querySelector('.rating.active');
                            if (!selectedRating) {
                                alert('Please select your satisfaction level.');
                                e.preventDefault();
                            }
                        });
                    });

                    function removeActive() {
                        const ratings = document.querySelectorAll('.rating');
                        ratings.forEach((r) => r.classList.remove('active'));
                    }



                </script>





            </div>

        </div>
        <!-- Button to trigger modal -->
        <section class="normal-section" id="about">
            <div class="titles">
                <h1 class="cross-bar-glitch" data-slice="20">#Hastag</h1>
                <img class="staggered-rise-in" data-slice="20" width="700" src="<?= base_url(); ?>img/berakhlak.png" />
            </div>

        </section>

        <footer id="footer">
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- footer logo -->
                        <div class="footer-logo">
                            <a href="https://oganilirkab.bps.go.id/"><img src="<?= base_url(); ?>/img/bps.png"
                                    alt="scanfcode"></a>
                        </div>
                        <!-- /footer logo -->
                        <!-- footer follow -->
                        <ul class="footer-follow">
                            <li><a href="https://web.facebook.com/bpskaboganilir"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li><a href="https://twitter.com/bpskaboganilir"><i class="fab fa-twitter"></i></a></li>

                            <li><a
                                    href="https://www.instagram.com/bpskaboganilir?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCGuNHUXOUCrqxsEE_wXQzQg"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                        <!-- /footer follow -->
                        <!-- footer copyright -->
                        <div class="footer-copyright">
                            <p>Copyright © 2025. All Rights Reserved.</p>
                        </div>
                        <!-- /footer copyright -->
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
        </footer>
    </main>

</body>
<script src="<?= base_url(); ?>/js/landing.js"></script>
<script src="<?= base_url(); ?>/js/feedback.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>/js/sb-admin-2.js"></script>
<script src="<?= base_url(); ?>/js/footer.js"></script>


<!-- Add this script at the end of your HTML body -->

<script type="text/javascript">
    function handlePekerjaanChange() {
        var pekerjaanSelect = document.getElementById("pekerjaan");
        var lainnyaFieldsPekerjaan = document.getElementById("lainnyaFieldsPekerjaan");

        if (pekerjaanSelect.value === "Umum/Lainnya") {
            lainnyaFieldsPekerjaan.style.display = "block";
        } else {
            lainnyaFieldsPekerjaan.style.display = "none";
        }
    }

    function handleKeperluanChange() {
        var keperluanSelect = document.getElementById("keperluan");
        var lainnyaFieldsKeperluan = document.getElementById("lainnyaFieldsKeperluan");

        if (keperluanSelect.value === "Lainnya") {
            lainnyaFieldsKeperluan.style.display = "block";
        } else {
            lainnyaFieldsKeperluan.style.display = "none";
        }
    }

    // Attach the event listeners to both select elements
    document.getElementById("pekerjaan").addEventListener("change", handlePekerjaanChange);
    document.getElementById("keperluan").addEventListener("change", handleKeperluanChange);


</script>

<script>
    function completeVisit(visitId) {
        clearInterval(window.stopwatches[visitId]);

        var apiUrl = '<?= base_url(); ?>/PostController/completeVisit/' + visitId;
        fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ visitId: visitId }),
        })
            .then(response => response.json())
            .then(data => {
                console.log('Data successfully sent:', data);
                var completionTimeElement = document.getElementById('completion_time_' + visitId);
                completionTimeElement.innerText = data.completed_at;
            })
            .catch(error => {
                console.error('An error occurred:', error);
            });
    }
</script>

<script>
    function finishVisit(id) {
        fetch('<?= base_url(); ?>PostController/finish_visit/' + id, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ id: id })
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('Visit has been finished. Execution time: ' + data.execution_time + ' seconds.');
                    location.reload();
                } else {
                    alert('An error occurred while finishing the visit.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        location.reload();
    }
</script>













</html>