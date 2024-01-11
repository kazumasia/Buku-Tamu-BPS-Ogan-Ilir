<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 col-l-6 d-flex order-2 order-xl-3">
            <div class="card w-20">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Keperluan</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-20">
                        <div class="py-3">
                            <div class="chart chart-s">
                                <canvas id="pieChart"></canvas>
                            </div>
                            <div id="chartTotals" class="mt-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-l-6 d-flex order-2 order-xl-3">
            <div class="card w-20">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Gender</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-20">
                        <div class="py-3">
                            <div class="chart chart-s">
                                <canvas id="pieChart-gender"></canvas>
                            </div>
                            <div id="chartTotalsGender" class="mt-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<div class="container-fluid">


    <div class="row">
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Keperluan</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <select class="form-control" id="yearFilter" onchange="getKeperluanStats()">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <?php for ($i = 2027; $i <= 2045; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                    <div class="chart-container">
                        <canvas id="pieChart" width="100" height="100"></canvas>
                    </div>
                    <div id="chartTotals" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Gender</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <select class="form-control" id="yearFilterGender" onchange="getGenderStats()">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <?php for ($i = 2027; $i <= 2045; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                    <div class="chart-container">
                        <canvas id="pieChart-gender" width="100" height="100"></canvas>
                    </div>
                    <div id="chartTotalsGender" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Pekerjaan</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <select class="form-control" id="yearFilterPekerjaan" onchange="getPekerjaanStats()">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <?php for ($i = 2027; $i <= 2045; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                    <div class="chart-container">
                        <!-- Add content for the third chart here -->
                        <canvas id="pieChart-pekerjaan" width="100" height="100"></canvas>
                    </div>
                    <div id="chartTotalsPekerjaan" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Jam</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <select class="form-control" id="yearFilterJam" onchange="getJamStats()">
                        <option value="">All Years</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <!-- Add more options as needed -->
                    </select>
                    <div class="chart-container">
                        <!-- Add content for the third chart here -->
                        <canvas id="pieChart-jam" width="100" height="100"></canvas>
                    </div>
                    <div id="chartTotalsJam" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Rating/Kepuasan</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <select class="form-control" id="yearFilterFeedback" onchange="getFeedbackStats()">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <?php for ($i = 2027; $i <= 2045; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                    <div class="chart-container">
                        <!-- Add content for the third chart here -->
                        <canvas id="pieChart-feedback" width="100" height="100"></canvas>
                    </div>
                    <div id="chartTotalsFeedback" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Pendidikan Terakhir</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <select class="form-control" id="yearFilterPendidikan" onchange="getPendidikanStats()">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <?php for ($i = 2027; $i <= 2045; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                    <div class="chart-container">
                        <!-- Add content for the third chart here -->
                        <canvas id="pieChart-pendidikan" width="100" height="100"></canvas>
                    </div>
                    <div id="chartTotalsPendidikan" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Tanggal</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <select class="form-control" id="yearFilterTanggal" onchange="getTanggalStats()">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <?php for ($i = 2027; $i <= 2045; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                    <div class="chart-container">
                        <!-- Add content for the third chart here -->
                        <canvas id="pieChart-tanggal" width="100" height="100"></canvas>
                    </div>
                    <div id="chartTotalsTanggal" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Bulan</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <select class="form-control" id="yearFilterBulan" onchange="getBulanStats()">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <?php for ($i = 2027; $i <= 2045; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                    <div class="chart-container">
                        <!-- Add content for the third chart here -->
                        <canvas id="pieChart-bulan" width="100" height="100"></canvas>
                    </div>
                    <div id="chartTotalsBulan" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Tahun</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <select class="form-control" id="yearFilterTahun" onchange="getTahunStats()">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <?php for ($i = 2027; $i <= 2045; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                    <div class="chart-container">
                        <!-- Add content for the third chart here -->
                        <canvas id="pieChart-tahun" width="100" height="100"></canvas>
                    </div>
                    <div id="chartTotalsTahun" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

<script>
    function getKeperluanStats() {
        var selectedYear = document.getElementById('yearFilter').value; // Assuming you have a select element with id 'yearFilter'
        var url = '<?= site_url('get-keperluan-stats'); ?>';

        if (selectedYear) {
            url += '?year=' + selectedYear;
        }
        fetch(url)
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

        // Check if there's an existing chart and destroy it
        if (window.myPieChart) {
            window.myPieChart.destroy();
        }

        var total = data.reduce((sum, item) => sum + item.total, 0);

        window.myPieChart = new Chart(ctx, {
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
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 8,
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
        <h5 class="card-title mb-0">Tabel Statistik Keperluan</h5>
        ${tableHTML}
    `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        getKeperluanStats(); // Initial call to load data on page load
        document.getElementById('yearFilter').addEventListener('change', getKeperluanStats);
    });
</script>
<script>
    function getGenderStats() {
        var selectedYear = document.getElementById('yearFilterGender').value; // Assuming you have a select element with id 'yearFilterGender'
        var url = '<?= site_url('get-gender-stats'); ?>';

        if (selectedYear) {
            url += '?year=' + selectedYear;
        }
        fetch(url)
            .then(response => response.json())
            .then(data => {
                createAndShowPieChartGender(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function createAndShowPieChartGender(data) {
        var total = data.reduce((sum, item) => sum + item.total, 0);
        var ctx = document.getElementById('pieChart-gender').getContext('2d');

        // Check if there's an existing chart and destroy it
        if (window.myPieChartGender) {
            window.myPieChartGender.destroy();
        }

        window.myPieChartGender = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(item => item.jenis_kelamin),
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
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 8,
                    }
                }
            }
        });

        updateChartTotalsGender(data);
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


    function updateChartTotalsGender(data) {
        var totalAllNeeds = data.reduce((sum, item) => sum + parseInt(item.total), 0);

        // Display total of all needs and individual totals in a table
        var tableHTML = `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                ${data.map(item => `<tr><td>${item.jenis_kelamin}</td><td>${item.total}</td></tr>`).join('')}
            </tbody>
        </table>
        <div>Total Semua: ${totalAllNeeds}</div>

    `;

        document.getElementById('chartTotalsGender').innerHTML = `
        <h5 class="card-title mb-0">Tabel Statistik Jenis Kelamin</h5>
        ${tableHTML}
    `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        getGenderStats(); // Initial call to load data on page load
        document.getElementById('yearFilterGender').addEventListener('change', getGenderStats);
    });
</script>
<script>
    function getPekerjaanStats() {
        var selectedYear = document.getElementById('yearFilterPekerjaan').value; // Assuming you have a select element with id 'yearFilterGender'
        var url = '<?= site_url('get-pekerjaan-stats'); ?>';

        if (selectedYear) {
            url += '?year=' + selectedYear;
        }
        fetch(url)
            .then(response => response.json())
            .then(data => {
                createAndShowPieChartPekerjaan(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function createAndShowPieChartPekerjaan(data) {
        var total = data.reduce((sum, item) => sum + item.total, 0);
        var ctx = document.getElementById('pieChart-pekerjaan').getContext('2d');

        // Check if there's an existing chart and destroy it
        if (window.myPieChartPekerjaan) {
            window.myPieChartPekerjaan.destroy();
        }

        window.myPieChartPekerjaan = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(item => item.pekerjaan),
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
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 8,
                    }
                }
            }
        });

        updateChartTotalsPekerjaan(data);
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


    function updateChartTotalsPekerjaan(data) {
        var totalAllNeeds = data.reduce((sum, item) => sum + parseInt(item.total), 0);

        // Display total of all needs and individual totals in a table
        var tableHTML = `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                ${data.map(item => `<tr><td>${item.pekerjaan}</td><td>${item.total}</td></tr>`).join('')}
            </tbody>
        </table>
        <div>Total Semua: ${totalAllNeeds}</div>

    `;

        document.getElementById('chartTotalsPekerjaan').innerHTML = `
        <h5 class="card-title mb-0">Tabel Statistik Pekerjaan</h5>
        ${tableHTML}
    `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        getPekerjaanStats(); // Initial call to load data on page load
        document.getElementById('yearFilterPekerjaan').addEventListener('change', getPekerjaanStats);
    });
</script>
<script>
    function getTanggalStats() {
        var selectedYear = document.getElementById('yearFilterTanggal').value; // Assuming you have a select element with id 'yearFilterGender'
        var url = '<?= site_url('get-tanggal-stats'); ?>';

        if (selectedYear) {
            url += '?year=' + selectedYear;
        }
        fetch(url)
            .then(response => response.json())
            .then(data => {
                createAndShowPieChartTanggal(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function createAndShowPieChartTanggal(data) {
        var total = data.reduce((sum, item) => sum + item.total, 0);
        var ctx = document.getElementById('pieChart-tanggal').getContext('2d');

        // Check if there's an existing chart and destroy it
        if (window.myPieChartTanggal) {
            window.myPieChartTanggal.destroy();
        }

        window.myPieChartTanggal = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(item => item.waktu_masuk),
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
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 8,
                    }
                }
            }
        });

        updateChartTotalsTanggal(data);
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


    function updateChartTotalsTanggal(data) {
        var totalAllNeeds = data.reduce((sum, item) => sum + parseInt(item.total), 0);

        // Display total of all needs and individual totals in a table
        var tableHTML = `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                ${data.map(item => `<tr><td>${item.waktu_masuk}</td><td>${item.total}</td></tr>`).join('')}
            </tbody>
        </table>
        <div>Total Semua: ${totalAllNeeds}</div>

    `;

        document.getElementById('chartTotalsTanggal').innerHTML = `
        <h5 class="card-title mb-0">Tabel Statistik Per Tanggal</h5>
        ${tableHTML}
    `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        getTanggalStats(); // Initial call to load data on page load
        document.getElementById('yearFilterTanggal').addEventListener('change', getTanggalStats);
    });
</script>
<script>
    function getBulanStats() {
        var selectedYear = document.getElementById('yearFilterBulan').value; // Assuming you have a select element with id 'yearFilterGender'
        var url = '<?= site_url('get-bulan-stats'); ?>';

        if (selectedYear) {
            url += '?year=' + selectedYear;
        }
        fetch(url)
            .then(response => response.json())
            .then(data => {
                createAndShowPieChartBulan(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function createAndShowPieChartBulan(data) {
        var total = data.reduce((sum, item) => sum + item.total, 0);
        var ctx = document.getElementById('pieChart-bulan').getContext('2d');

        // Check if there's an existing chart and destroy it
        if (window.myPieChartBulan) {
            window.myPieChartBulan.destroy();
        }

        window.myPieChartBulan = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(item => item.waktu_masuk_month),
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
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 8,
                    }
                }
            }
        });

        updateChartTotalsBulan(data);
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


    function updateChartTotalsBulan(data) {
        var totalAllNeeds = data.reduce((sum, item) => sum + parseInt(item.total), 0);

        // Display total of all needs and individual totals in a table
        var tableHTML = `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Bulan</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                ${data.map(item => `<tr><td>${item.waktu_masuk_month}</td><td>${item.total}</td></tr>`).join('')}
            </tbody>
        </table>
        <div>Total Semua: ${totalAllNeeds}</div>

    `;

        document.getElementById('chartTotalsBulan').innerHTML = `
        <h5 class="card-title mb-0">Tabel Statistik Per Bulan</h5>
        ${tableHTML}
    `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        getBulanStats(); // Initial call to load data on page load
        document.getElementById('yearFilterBulan').addEventListener('change', getBulanStats);
    });
</script>
<script>
    function getTahunStats() {
        var selectedYear = document.getElementById('yearFilterTahun').value; // Assuming you have a select element with id 'yearFilterGender'
        var url = '<?= site_url('get-tahun-stats'); ?>';

        if (selectedYear) {
            url += '?year=' + selectedYear;
        }
        fetch(url)
            .then(response => response.json())
            .then(data => {
                createAndShowPieChartTahun(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function createAndShowPieChartTahun(data) {
        var total = data.reduce((sum, item) => sum + item.total, 0);
        var ctx = document.getElementById('pieChart-tahun').getContext('2d');

        // Check if there's an existing chart and destroy it
        if (window.myPieChartTahun) {
            window.myPieChartTahun.destroy();
        }

        window.myPieChartTahun = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(item => item.waktu_masuk_tahun),
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
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 8,
                    }
                }
            }
        });

        updateChartTotalsTahun(data);
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


    function updateChartTotalsTahun(data) {
        var totalAllNeeds = data.reduce((sum, item) => sum + parseInt(item.total), 0);

        // Display total of all needs and individual totals in a table
        var tableHTML = `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tahun</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                ${data.map(item => `<tr><td>${item.waktu_masuk_tahun}</td><td>${item.total}</td></tr>`).join('')}
            </tbody>
        </table>
        <div>Total Semua: ${totalAllNeeds}</div>

    `;

        document.getElementById('chartTotalsTahun').innerHTML = `
        <h5 class="card-title mb-0">Tabel Statistik Per Tahun</h5>
        ${tableHTML}
    `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        getTahunStats(); // Initial call to load data on page load
        document.getElementById('yearFilterTahun').addEventListener('change', getTahunStats);
    });
</script>
<script>
    function getJamStats() {
        var selectedYear = document.getElementById('yearFilterJam').value; // Assuming you have a select element with id 'yearFilterGender'
        var url = '<?= site_url('get-jam-stats'); ?>';

        if (selectedYear) {
            url += '?year=' + selectedYear;
        }
        fetch(url)
            .then(response => response.json())
            .then(data => {
                createAndShowPieChartJam(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function createAndShowPieChartJam(data) {
        var total = data.reduce((sum, item) => sum + item.total, 0);
        var ctx = document.getElementById('pieChart-jam').getContext('2d');

        // Check if there's an existing chart and destroy it
        if (window.myPieChartJam) {
            window.myPieChartJam.destroy();
        }

        window.myPieChartJam = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(item => item.tanggal),
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
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 8,
                    }
                }
            }
        });

        updateChartTotalsJam(data);
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


    function updateChartTotalsJam(data) {
        var totalAllHours = data.reduce((sum, item) => sum + parseFloat(item.total), 0);
        var totalAllVisitors = data.reduce((sum, item) => sum + parseInt(item.jumlah_pengunjung), 0);

        var tableHTML = `
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Total Jam</th>
                <th scope="col">Jumlah Pengunjung</th>
                <th scope="col">Rata-rata Jam</th>
            </tr>
        </thead>
        <tbody>
            ${data.map(item => `<tr><td>${item.tanggal}</td><td>${item.total}</td><td>${item.jumlah_pengunjung}</td><td>${item.rata_rata_jam}</td></tr>`).join('')}
        </tbody>
    </table>
    <div>Total Jam Semua: ${totalAllHours}</div>
    <div>Total Pengunjung: ${totalAllVisitors}</div>
    `;

        document.getElementById('chartTotalsJam').innerHTML = `
    <h5 class="card-title mb-0">Tabel Statistik Total Jam</h5>
    ${tableHTML}
    `;
    }

    document.addEventListener('DOMContentLoaded', function () {
        getJamStats(); // Initial call to load data on page load
        document.getElementById('yearFilterJam').addEventListener('change', getJamStats);
    });
</script>
<script>
    function getFeedbackStats() {
        var selectedYear = document.getElementById('yearFilterFeedback').value; // Assuming you have a select element with id 'yearFilterGender'
        var url = '<?= site_url('get-feedback-stats'); ?>';

        if (selectedYear) {
            url += '?year=' + selectedYear;
        }
        fetch(url)
            .then(response => response.json())
            .then(data => {
                createAndShowPieChartFeedback(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function createAndShowPieChartFeedback(data) {
        var total = data.reduce((sum, item) => sum + item.total, 0);
        var ctx = document.getElementById('pieChart-feedback').getContext('2d');

        // Check if there's an existing chart and destroy it
        if (window.myPieChartFeedback) {
            window.myPieChartFeedback.destroy();
        }

        window.myPieChartFeedback = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(item => item.rating),
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
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 8,
                    }
                }
            }
        });

        updateChartTotalsFeedback(data);
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


    function updateChartTotalsFeedback(data) {
        var totalAllNeeds = data.reduce((sum, item) => sum + parseInt(item.total), 0);

        // Display total of all needs and individual totals in a table
        var tableHTML = `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Rating</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                ${data.map(item => `<tr><td>${item.rating}</td><td>${item.total}</td></tr>`).join('')}
            </tbody>
        </table>
        <div>Total Semua: ${totalAllNeeds}</div>

    `;

        document.getElementById('chartTotalsFeedback').innerHTML = `
        <h5 class="card-title mb-0">Tabel Statistik Rating</h5>
        ${tableHTML}
    `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        getFeedbackStats(); // Initial call to load data on page load
        document.getElementById('yearFilterFeedback').addEventListener('change', getFeedbackStats);
    });
</script>
<script>
    function getPendidikanStats() {
        var selectedYear = document.getElementById('yearFilterPendidikan').value; // Assuming you have a select element with id 'yearFilterGender'
        var url = '<?= site_url('get-pendidikan-stats'); ?>';

        if (selectedYear) {
            url += '?year=' + selectedYear;
        }
        fetch(url)
            .then(response => response.json())
            .then(data => {
                createAndShowPieChartPendidikan(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function createAndShowPieChartPendidikan(data) {
        var total = data.reduce((sum, item) => sum + item.total, 0);
        var ctx = document.getElementById('pieChart-pendidikan').getContext('2d');

        // Check if there's an existing chart and destroy it
        if (window.myPieChartPendidikan) {
            window.myPieChartPendidikan.destroy();
        }

        window.myPieChartPendidikan = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(item => item.pendidikan),
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
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                            return `${data.labels[tooltipItem.index]}: ${currentValue} ( ${percentage}% )`;
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 8,
                    }
                }
            }
        });

        updateChartTotalsPendidikan(data);
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


    function updateChartTotalsPendidikan(data) {
        var totalAllNeeds = data.reduce((sum, item) => sum + parseInt(item.total), 0);

        // Display total of all needs and individual totals in a table
        var tableHTML = `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Pendidikan Terakhir</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                ${data.map(item => `<tr><td>${item.pendidikan}</td><td>${item.total}</td></tr>`).join('')}
            </tbody>
        </table>
        <div>Total Semua: ${totalAllNeeds}</div>

    `;

        document.getElementById('chartTotalsPendidikan').innerHTML = `
        <h5 class="card-title mb-0">Tabel Statistik Pendidikan</h5>
        ${tableHTML}
    `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        getPendidikanStats();
    });
</script>
<script>
    document.getElementById('filter-form').addEventListener('submit', function (event) {
        event.preventDefault();
        var year = document.getElementById('filter-year').value;
        fetch('<?= site_url('filter-stats'); ?>?year=' + year)
            .then(response => response.json())
            .then(data => {
                // Update statistik dengan data baru
                updateStats(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
<?= $this->endSection(); ?>