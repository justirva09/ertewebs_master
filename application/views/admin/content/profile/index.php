<!-- breadcrumbs -->
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="breadcrumbs">
        <ul>
            <li><a href="dashboard">Home</a></li>
            /
            <li class="current"><a href="#">Profile</a></li>
        </ul>
    </div>
</div>
<!-- breadcrumbs -->

<!-- content-->
<div id="parent" class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <!--Table User-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="flat-card">
                <div class="flat-card-header" data-toggle="collapse" data-target="#profileBody">
                    <h4 class="flat-card-title">Profile</h4>
                </div>
                <div id="profileBody" class="collapse show">
                    <div class="flat-card-body">
                        <div class="container">
                            <div class="profile-box">
                                <div class="profil-img">
                                    <img class="card-img" src="http://localhost/ertewebs/assets/images/logo/user-dummy.png" alt="profile"> </div>
                                <div class="profile-info">
                                    <dl class="dl-horizontal">
                                        <dt>Nama</dt>
                                        <dd><?= $this->session->userdata('userLogin')['t_nama'] ?></dd>
                                        <dt>TTL</dt>
                                        <dd><?= $this->session->userdata('userLogin')['t_tempat_lahir'] ?>, <?= $this->session->userdata('userLogin')['t_tgl_lahir'] ?></dd>
                                        <dt>Agama</dt>
                                        <dd><?= $this->session->userdata('userLogin')['t_agama'] ?></dd>
                                        <dt>Pekerjaan</dt>
                                        <dd><?= $this->session->userdata('userLogin')['t_pekerjaan'] ?></dd>
                                        <dt>alamat</dt>
                                        <dd class="alamat">VILLA MUTIARA GADING 2 BLOK B.1 NO. <?= $this->session->userdata('userLogin')['t_alamat'] ?> RT.010/008, KEL.KARANGSATRIA. KEC.TAMBUN UTARA</dd>
                                        <dt>Email</dt>
                                        <dd><?= $this->session->userdata('userLogin')['t_email'] ?></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .profile-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0 -10px;
        margin-bottom: 20px
    }

    .profile-info {
        border: 1px solid #e1e2e2;
        padding: 20px;
        width: 64%;
        margin: 0 10px
    }

    .profil-img {
        width: 30%;
        margin: 0 10px
    }

    .profile-info p {
        margin-bottom: 10px
    }

    .dl-horizontal dt {
        float: left;
        width: 160px;
        overflow: hidden;
        clear: left;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    dd.alamat {
        font-size: 15px;
    }

    @media only screen and (min-width: 840px) .dl-horizontal dt {
        float: left;
        width: 160px;
        overflow: hidden;
        clear: left;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    @media only screen and (min-width: 840px) .dl-horizontal dt {
        float: left;
        width: 160px;
        overflow: hidden;
        clear: left;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    @media only screen and (min-width: 840px) .dl-horizontal dd {
        margin-left: 180px;
        padding-bottom: 0;
    }

    @media only screen and (min-width: 840px) .dl-horizontal dd {
        margin-left: 180px;
        padding-bottom: 0;
    }

    dt {
        color: #bdbdbd;
    }

    dd,
    dt {
        line-height: 1.8;
    }
</style>
<!-- content -->
<script src="assets/js/user-list.js"></script>