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
            <form action="<?= base_url('PostController/filterRating') ?>" method="post">
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
            <form action="<?= base_url('PostController/Ratings') ?>" method="post">
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
            <a href="<?= route_to('export_feedback'); ?>" class="btn btn-success">Export to Excel</a>
        </div>

    </div>






    <!-- Your table rendering code here -->






    <br />
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="data-row">
                <th scope="col">No</th>
                <th scope="col">Rating</th>
                <th scope="col">Alasan</th>
                <th scope="col">Tanggal</th>
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
                        <?= $row['rating']; ?>
                    </td>
                    <td>
                        <?= $row['message']; ?>
                    </td>
                    <td>
                        <?= $row['created_at']; ?>
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
                                    <a href="<?= base_url('admin/deletePuas/' . $row['id']); ?>"
                                        class="btn btn-danger">Yes</a>
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




<?= $this->endSection(); ?>