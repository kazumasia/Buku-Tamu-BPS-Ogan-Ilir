<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="container mt-4">
        <h1>Edit Pengunjung</h1>
        <form action="<?= base_url('admin/update'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $pengunjung['id']; ?>">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" name="nama" value="<?= $pengunjung['nama']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" value="<?= $pengunjung['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="pendidikan" class="form-label">Pendidikan Terakhir:</label>
                <select class="form-control" id="pendidikan" name="pendidikan" required>
                    <option value="">--Pilih Pendidikan Anda--</option>
                    <option value="SD/SMP/SMA Sederajat" <?= ($pengunjung['pendidikan'] == 'SD/SMP/SMA Sederajat') ? 'selected' : ''; ?>>SD/SMP/SMA Sederajat</option>
                    <option value="D1" <?= ($pengunjung['pendidikan'] == 'D1') ? 'selected' : ''; ?>>D1</option>
                    <option value="D2" <?= ($pengunjung['pendidikan'] == 'D2') ? 'selected' : ''; ?>>D2</option>
                    <option value="D3" <?= ($pengunjung['pendidikan'] == 'D3') ? 'selected' : ''; ?>>
                        D3</option>
                    <option value="D4/S1 Sederajat" <?= ($pengunjung['pendidikan'] == 'D4/S1 Sederajat') ? 'selected' : ''; ?>>D4/S1 Sederajat</option>
                    <option value="S2/S3 Sederajat" <?= ($pengunjung['pendidikan'] == 'S2/S3 Sederajat') ? 'selected' : ''; ?>>S2/S3 Sederakjat</option>
                </select>

            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No. Telepon:</label>
                <input type="tel" class="form-control" name="no_telp" value="<?= $pengunjung['no_telp']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="pekerjaan" class="form-label">pekerjaan:</label>
                <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                    <option value="">--Masukkan pekerjaan Anda--</option>
                    <option value="ASN" <?= ($pengunjung['pekerjaan'] == 'ASN') ? 'selected' : ''; ?>>ASN</option>
                    <option value="Perangkat Desa" <?= ($pengunjung['pekerjaan'] == 'Perangkat Desa') ? 'selected' : ''; ?>>
                        Perangkat Desa</option>
                    <option value="Mahasiswa" <?= ($pengunjung['pekerjaan'] == 'Mahasiswa') ? 'selected' : ''; ?>>Mahasiswa
                    </option>
                    <option value="Umum/Lainnya" <?= ($pengunjung['pekerjaan'] == 'Umum/Lainnya') ? 'selected' : ''; ?>>
                        Umum/Lainnya</option>
                </select>
            </div>
            <div id="lainnyaFieldsPekerjaan" style="display:none;" class="form-group">
                <label for="pekerjaan">Pekerjaan Lainnya:</label>
                <input type="text" class="form-control" id="pekerjaan"
                    placeholder="Masukkan Pekerjaan Umum/lainnya Contoh: Petani atau Warga Lokal" name="pekerjaan"
                    value="<?= $pengunjung['pekerjaan']; ?>">
            </div>

            <div class="mb-3">
                <label for="keperluan" class="form-label">Pilih Keperluan:</label>
                <select class="form-control" id="keperluan" name="keperluan" required>
                    <option value="">--Masukkan Keperluan Anda--</option>
                    <option value="PST" <?= ($pengunjung['keperluan'] == 'PST') ? 'selected' : ''; ?>>
                        PST</option>
                    <option value="Menemui Seseorang" <?= ($pengunjung['keperluan'] == 'Menemui Seseorang') ? 'selected' : ''; ?>>Menemui Seseorang</option>
                    <option value="Lainnya" <?= ($pengunjung['keperluan'] == 'Lainnya') ? 'selected' : ''; ?>>Lainnya
                    </option>
                </select>
            </div>
            <div id="lainnyaFieldsKeperluan" style="display:none;" class="form-group">
                <label for="keperluan">Keperluan Lainnya:</label>
                <input type="text" class="form-control" id="keperluan" placeholder="Masukkan Keperluan Lainnya"
                    name="keperluan" value="<?= $pengunjung['keperluan']; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

</div>
<script type="text/javascript">
    function handlePekerjaanChange() {
        var pekerjaanSelect = document.getElementById("pekerjaan");
        var lainnyaFieldsPekerjaan = document.getElementById("lainnyaFieldsPekerjaan");
        var pekerjaanLainnyaInput = document.getElementById("pekerjaanLainnya");

        if (pekerjaanSelect.value === "Umum/Lainnya") {
            lainnyaFieldsPekerjaan.style.display = "block";
        } else {
            lainnyaFieldsPekerjaan.style.display = "none";
        }

        // Check if the selected option has a value
        if (pekerjaanSelect.value !== "") {
            pekerjaanLainnyaInput.style.display = "block";
        } else {
            pekerjaanLainnyaInput.style.display = "none";
        }
    }

    function handleKeperluanChange() {
        var keperluanSelect = document.getElementById("keperluan");
        var lainnyaFieldsKeperluan = document.getElementById("lainnyaFieldsKeperluan");
        var keperluanLainnyaInput = document.getElementById("keperluanLainnya");

        if (keperluanSelect.value === "Lainnya") {
            lainnyaFieldsKeperluan.style.display = "block";
        } else {
            lainnyaFieldsKeperluan.style.display = "none";
        }

        // Check if the selected option has a value
        if (keperluanSelect.value !== "") {
            keperluanLainnyaInput.style.display = "block";
        } else {
            keperluanLainnyaInput.style.display = "none";
        }
    }

    // Attach the event listeners to both select elements
    document.getElementById("pekerjaan").addEventListener("change", handlePekerjaanChange);
    document.getElementById("keperluan").addEventListener("change", handleKeperluanChange);

    // Call the functions initially to set the initial state
    handlePekerjaanChange();
    handleKeperluanChange();
</script>

<?= $this->endSection(); ?>