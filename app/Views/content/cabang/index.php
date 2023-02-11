<?= $this->extend('partial/app') ?>

<?= $this->section('content') ?>

<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4>Data Table</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Propan</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                            <li class="breadcrumb-item active">Cabang</li>
                                        </ol>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title mb-5">
                                        <a href="<?= base_url('Create_user') ?>" type="submit" class="btn btn-primary w-md">Add Cabang</a>
                                        </h4>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Branch</th>
                                                    <th>Cabang</th>
                                                    <th>Toko</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($mtoko as $row): ?>
                                                <tr>
                                                    <td> <?= $row['kode_branch']?> - <?= $row['nama_branch']?></td>
                                                    <td><?= $row['kode_cabang']?> - <?= $row['nama_cabang']?></td>
                                                    <td><?= $row['kode_toko']?> - <?= $row['nama_toko']?></td>
                                                    <td>
                                                    <a href="#" type="submit" class="btn btn-warning w-md">Edit</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


<?= $this->endSection() ?>