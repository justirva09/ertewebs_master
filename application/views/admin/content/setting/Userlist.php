<!-- breadcrumbs -->
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="breadcrumbs">
        <ul>
            <li><a href="dashboard">Home</a></li>
            /
            <li class="current"><a href="#">Pengurus</a></li>
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
                    <h4 class="flat-card-title">Tambah Pengurus</h4>
                </div>
                <div class="flat-card-body">
                    <div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="t_user_type" value="" />
                                    <label>User Type<label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="t_nama" value="" />
                                    <label>Nama</label>
                                </div>
                                <div class="form-group">
                                    <div class="form-group row ml-0">
                                        <input type="text" class="form-control col-sm-4" name="t_tempat_lahir" value="" />
                                        <label>Tempat</label>
                                        <div class="col-8">
                                            <input class="form-control" type="date" value="" name="t_tgl_lahir" id="tgl-lahir">
                                        </div>
                                    </div>
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

        <!--Sidebar-->
        <style>
            li.nth-child-selector:nth-child(1) {
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #d6e9c6
            }

            li.nth-child-selector:nth-child(2) {
                color: #8a6d3b;
                background-color: #fcf8e3;
                border-color: #faebcc
            }

            li.nth-child-selector:nth-child(3) {
                color: #a94442;
                background-color: #f2dede;
                border-color: #ebccd1
            }

            li.nth-child-selector {
                border-radius: 11px
            }

            .notice-board .notice-board-list {
                padding: 0 8px;
                margin: 0;
                list-style: none
            }

            .notice-board {
                max-height: 385px
            }

            .notice-board .notice-board-list>li .notice-list-item {
                border-bottom: unset;
                padding: 14px
            }
        </style>
        <div class="section-3 my-notice col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="flat-card">
                <div class="flat-card-header" data-toggle="collapse" data-target="#SidebarBody">
                    <h4 class="flat-card-title">My Notice</h4>
                </div>
                <div id="SidebarBody" class="flat-card-body collapse show">
                    <div class="notice-board">
                        <ul class="notice-board-list">
                            <li class="nth-child-selector">
                                <div class="notice-list-item">
                                    <div class="notice-list-header">
                                        <span class="notice-list-date">08 Jul 2019</span>
                                        <span class="notice-list-arrive">3 Hours ago</span>
                                    </div>
                                    <h5 class="notice-list-title">Tambah Pengurus</h5>
                                    <p class="notice-list-text">Kode <strong>User Type</strong> untuk pengurus adalah 2</p>
                                </div>
                            </li>
                            <?php for ($i = 0; $i < 2; $i++) { ?>
                                <li class="nth-child-selector">
                                    <div class="notice-list-item">
                                        <div class="notice-list-header">
                                            <span class="notice-list-date">08 Jul 2019</span>
                                            <span class="notice-list-arrive">5 min ago</span>
                                        </div>
                                        <h5 class="notice-list-title">Notice Title Here</h5>
                                        <p class="notice-list-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae erat a nisl venenatis pellentesque.</p>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Table User-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="flat-card">
                <div class="flat-card-header" data-toggle="collapse" data-target="#userListBody">
                    <h4 class="flat-card-title">Daftar Pengurus</h4>
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