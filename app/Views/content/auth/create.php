<?= $this->extend('partial/app') ?>
<?= $this->section('content') ?>



<div class="main-content">
<div class="page-content">
                    <div class="container-fluid">

<div class="row">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Create New User</h4>
                                        <div class="row">
                                            <div class="col-lg-6 ">
                                                <div class="mt-5 mt-lg-4">
                                                    <form method="POST" action="<?= base_url('Post_user')?>">
                                                        <div class="row mb-4">
                                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">First name</label>
                                                            <div class="col-sm-9">
                                                              <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your first name">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Username</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Role</label>
                                                            <div class="col-sm-9">
                                                            <select class="form-control">
                                                                <option>--Role--</option>
                                                                <option value="1">Admin</option>
                                                                <option value="2">Mechanic</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                                                            <div class="col-sm-9">
                                                              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                                            </div>
                                                        </div>
            
                                                        <div class="row justify-content-end">
                                                            <div class="col-sm-9">
                                                                <div class="form-check">
                                                                </div>
            
                                                                <div>
                                                                    <button type="submit" class="btn btn-success w-md">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                </div>
                            </div>
</div>
</div>
</div>
</div>
<?= $this->endSection() ?>