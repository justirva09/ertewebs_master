<!-- breadcrumbs -->
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="breadcrumbs">
        <ul>
            <li><a href="dashboard">Home</a></li>
            /
            <li class="current"><a href="#">User List</a></li>
        </ul>
    </div>
</div>
<!-- breadcrumbs -->

<!-- content-->
<div id="parent" class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
            <div class="flat-card mb-4">
                <div class="flat-card-header">
                    <h4 class="flat-card-title">Add User</h4>
                </div>
                <div class="flat-card-body">
                    <div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="t_user_type" value="" />
                                    <label>User Type</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="t_nama" value="" />
                                    <label>Nama</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="t_tempat_tgl_lahir" value="" />
                                    <label>Tempat Tanggal Lahir</label>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="t_agama" value="" />
                                            <label>Agama</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="t_pekerjaan" value="" />
                                            <label>pekerjaan</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                        <div class="row mb-4">
                                            <div class="cp-form">
                                                <div class="custom-control custom-radio cp-form-control">
                                                    <input id="male" name="t_gender" type="radio" class="custom-control-input" checked value="Laki-laki" required />
                                                    <label for="male" class="custom-control-label has-val">Laki-laki</label>
                                                </div>
                                                <div class="custom-control custom-radio cp-form-control">
                                                    <input id="female" name="t_gender" type="radio" class="custom-control-input" value="Perempuan" />
                                                    <label for="female" class="custom-control-label">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-6">
                                        <div class="form-group">
                                            <input type="radio" class="form-control" name="t_gender" value="laki-laki" />
                                            <label>Jenis Kelamin</label>
                                        </div>
                                    </div> -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="t_username" value="" />
                                            <label>Username</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="t_email" value="" />
                                            <label>email</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="t_password" value="" />
                                            <label>password</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="t_alamat" value="" />
                                            <label>alamat</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="cover-pic form-group">
                                    <img class="w-100" src="http://localhost/ertewebs/assets/images/logo/user-dummy.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flat-card-footer">
                    <div class="w-100">
                        <button type="button" class="btn btn-pertama" id="addUser">Add</button>
                        <button type="button" class="btn btn-pertama d-none" id="editUser">Edit</button>
                        <button type="button" class="btn btn-bahaya" id="resetUser">Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Table User-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="flat-card">
                <div class="flat-card-header" data-toggle="collapse" data-target="#userListBody">
                    <h4 class="flat-card-title">User List</h4>
                </div>
                <div id="userListBody" class="collapse show">
                    <div class="flat-card-body">
                        <div id="userListShow" class="table-responsive">
                            <!--append here-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content -->
<script src="assets/js/user-list.js"></script>