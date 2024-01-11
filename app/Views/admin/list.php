<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>





<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="p-10">
                Data Pengunjung
            </h1>
        </div>
    </div>
    <!-- 
    <div class="row">
        <div class="col-md-3">
            <form action="<?= base_url('PostController/filter') ?>" method="post">
                <div class="form-group">
                    <label for="selected_date">Select Date:</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="selected_date" name="selected_date" required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </div>
            </form>
            <a href="<?= base_url('PostController/export'); ?>" download="file_export.xlsx"
                class="btn btn-success">Export
                to Excel</a>

        </div>
        <div class="row mb-3">
             Add this form above your table 
            <form action="<?= base_url('PostController/search') ?>" method="post" class="mb-3">
                <div class="form-group">
                    <label for="search_query">Search:</label>
                    <input type="text" class="form-control" id="search_query" name="search_query"
                        placeholder="Enter keyword">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>

        </div> -->

    <div class="row">
        <!-- Form for selecting date -->
        <div class="col-md-3">
            <form action="<?= base_url('PostController/filter') ?>" method="post">
                <div class="form-group">
                    <label for="selected_date">Pilih Tanggal:</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="selected_date" name="selected_date" required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <!-- Form for searching -->
        <div class="col-md-9 text-center">
            <form action="<?= base_url('PostController/search') ?>" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search_query" name="search_query"
                            placeholder="Cari Data Disini">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Export to Excel button -->
        <div class="col-md-3 md-9 text-right">
            <a href="<?= base_url('PostController/export'); ?>" download="file_export.xlsx"
                class="btn btn-success">Export to Excel</a>
        </div>
    </div>






    <!-- Your table rendering code here -->






    <br />
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="data-row">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Email</th>
                <th scope="col">Pendidikan Terakhir</th>
                <th scope="col">No. Telepon</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Keperluan</th>
                <th scope="col">Waktu Masuk</th>
                <th scope="col">Waktu Keluar</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>

            </tr>
        </thead>
        <tbody>
            <!-- Add a link to trigger the export -->



            <?php foreach ($pengunjung as $index => $row): ?>
                <tr>
                    <th scope="row">
                        <?= $index + 1; ?>
                    </th>
                    <td>
                        <?= $row['nama']; ?>
                    </td>
                    <td>
                        <?= $row['jenis_kelamin']; ?>
                    </td>
                    <td>
                        <?= $row['email']; ?>
                    </td>
                    <td>
                        <?= $row['pendidikan']; ?>
                    </td>
                    <td>
                        <?= $row['no_telp']; ?>
                    </td>
                    <td>
                        <?= $row['pekerjaan']; ?>
                    </td>
                    <td>
                        <?= $row['keperluan']; ?>
                    </td>
                    <td>
                        <?= $row['waktu_masuk']; ?>
                    </td>
                    <td>
                        <?= $row['waktu_keluar']; ?>
                    </td>
                    <td>
                        <?= $row['status']; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/edit/' . $row['id']); ?>" class="btn btn-warning btn-sm">Edit</a>

                    </td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#deleteModal<?= $row['id']; ?>">Delete</a>
                    </td>

                    <!-- Tambahkan modal konfirmasi untuk setiap pengunjung -->
                    <div class="modal fade" id="deleteModal<?= $row['id']; ?>" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Konfirmasi Penghapusan</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus pengunjung ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?= route_to('delete_pengunjung', $row['id']); ?>"
                                        class="btn btn-danger">Ya</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

<!-- <script>
        function getKeperluanStats() {
            fetch('<?= site_url('get-keperluan-stats'); ?>')
                .then(response => response.json())
                .then(data => {
                    createAndShowPieChart(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function createAndShowPieChart(data) {
            var ctx = document.getElementById('pieChart').getContext('2d');
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: data.map(item => item.keperluan),
                    datasets: [{
                        data: data.map(item => item.total),
                        backgroundColor: getRandomColors(data.length),
                        borderColor: getRandomColors(data.length),
                        borderWidth: 1
                    }]
                }
            });
        }

        // Function to generate random colors for the chart
        function getRandomColors(count) {
            var colors = [];
            for (var i = 0; i < count; i++) {   
                colors.push(getRandomColor());
            }
            return colors;
        }

        // Function to generate a random color
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        document.addEventListener('DOMContentLoaded', function () {
            getKeperluanStats();
        });
    </script> -->



<script>
    function getKeperluanStats() {
        fetch('<?= site_url('get-keperluan-stats'); ?>')
            .then(response => response.json())
            .then(data => {
                createAndShowPieChart(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function createAndShowPieChart(data) {
        var total = data.reduce((sum, item) => sum + item.total, 0);
        var ctx = document.getElementById('pieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(item => item.keperluan),
                datasets: [{
                    data: data.map(item => item.total),
                    backgroundColor: getRandomColors(data.length),
                    borderColor: getRandomColors(data.length),
                    borderWidth: 1
                }]
            },
            options: {
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce((sum, value) => sum + value, 0);
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                }
            }
        });
        updateChartTotals(data);

    }

    // Function to generate random colors for the chart
    function getRandomColors(count) {
        var colors = [];
        for (var i = 0; i < count; i++) {
            colors.push(getRandomColor());
        }
        return colors;
    }

    // Function to generate a random color
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // document.addEventListener('DOMContentLoaded', function () {
    //     getKeperluanStats();
    // });


    function updateChartTotals(data) {
        var totalAllNeeds = data.reduce((sum, item) => sum + parseInt(item.total), 0);

        // Display total of all needs and individual totals in a table
        var tableHTML = `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                ${data.map(item => `<tr><td>${item.keperluan}</td><td>${item.total}</td></tr>`).join('')}
            </tbody>
        </table>
        <div>Total Semua: ${totalAllNeeds}</div>

    `;

        document.getElementById('chartTotals').innerHTML = `
        <h5 class="card-title mb-0">Tabel Keperluan</h5>
        ${tableHTML}
    `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        getKeperluanStats();
    });
</script>



<?= $this->endSection(); ?>