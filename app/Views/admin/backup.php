<!-- app/Views/home/index.php -->

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
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="form-group">
                <label for="yearSelector">Select Year:</label>
                <input type="number" id="yearSelector" class="form-control" placeholder="Enter year" />
                <button onclick="updateChartByYear()" class="btn btn-primary">Filter</button>
            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-3">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Keperluan</h5>
                </div>
                <div class="card-body d-flex flex-column">
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
        getKeperluanStats();
    });
</script>
<script>
    function getGenderStats() {
        fetch('<?= site_url('get-gender-stats'); ?>')
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

        var myPieChart = new Chart(ctx, {
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
        getGenderStats();
    });
</script>
<script>
    function getPekerjaanStats() {
        fetch('<?= site_url('get-pekerjaan-stats'); ?>')
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

        var myPieChart = new Chart(ctx, {
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
        getPekerjaanStats();
    });
</script>
<script>
    function getTanggalStats() {
        fetch('<?= site_url('get-tanggal-stats'); ?>')
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

        var myPieChart = new Chart(ctx, {
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
        getTanggalStats();
    });
</script>
<script>
    function getBulanStats() {
        fetch('<?= site_url('get-bulan-stats'); ?>')
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

        var myPieChart = new Chart(ctx, {
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
        getBulanStats();
    });
</script>
<script>
    function getTahunStats() {
        fetch('<?= site_url('get-tahun-stats'); ?>')
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

        var myPieChart = new Chart(ctx, {
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
        getTahunStats();
    });
</script>
<script>
    function getJamStats() {
        fetch('<?= site_url('get-jam-stats'); ?>')
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

        var myPieChart = new Chart(ctx, {
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
        getJamStats();
    });
</script>
<script>
    function getFeedbackStats() {
        fetch('<?= site_url('get-feedback-stats'); ?>')
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

        var myPieChart = new Chart(ctx, {
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
        getFeedbackStats();
    });
</script>
<script>
    function getPendidikanStats() {
        fetch('<?= site_url('get-pendidikan-stats'); ?>')
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

        var myPieChart = new Chart(ctx, {
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
<?= $this->endSection(); ?>