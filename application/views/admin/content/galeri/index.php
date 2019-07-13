<!-- breadcrumbs -->
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="breadcrumbs">
        <ul>
            <li><a href="dashboard">Home</a></li>
            /
            <li class="current"><a href="#">Galeri</a></li>
        </ul>
    </div>
</div>
<!-- breadcrumbs -->

<!-- content-->
<div id="parent" class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="flat-card mb-4">
                <div class="flat-card-header">
                    <h4 class="flat-card-title">Galeri</h4>
                </div>
                <div class="flat-card-body">
                    <div id="showBTN" class="form-group">

                    </div>
                    <div id="galeriShow">
                        <!--APPEND DATA HERE!-->

                    </div>
                    <div class="flat-card-footer">
                        <div class="w-100">
                            <span>Semua Data Hanya Dummy Content</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalGaleri" tabindex="-1" role="dialog" aria-labelledby="modalGaleriLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Photos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="pic-wrapper" style="background-image: url(&quot;&quot;);">
                                <input class="pic-input" name="item_pic" type="file" accept=".jpg,.png,.jpeg">
                                <span>Upload Image</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="g_title" value="" />
                                <label>Title</label>
                            </div>
                            <div class="form-group">
                                <textarea style="resize:none" class="form-control" name="g_desc"></textarea>
                                <label>Description</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-pertama">Add Photos</button>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .item-action .edit,
                .delete {
                    padding: 3px 8px;
                    background: #333;
                    color: #fff;
                    border-radius: 3px;
                }

                .item-action {
                    display: flex;
                    flex-wrap: wrap;
                }
            </style>
            <!-- content -->
            <script src="assets/js/galeri.js"></script>