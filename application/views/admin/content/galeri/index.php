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
                    <div class="row">
                        <div id="showBTN" class="form-group ml-2">
                            <!--Append Button Here!-->
                        </div>
                        <div id="showVideo" class="form-group ml-2">
                            <!--Append Button Here!-->
                        </div>
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

            <!-- Modal Photos -->
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
            <link href="https://cdn.plyr.io/3.2.0/plyr.css" rel="stylesheet">
            <!-- Modal Video-->
            <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="modalVideoLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Video</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <video class='js-player' poster="http://www.oneokrock.com/wp-content/themes/oor_pc/images/common/ogimage.png" controls playsinline>
                                    <source src="https://firebasestorage.googleapis.com/v0/b/project-clone.appspot.com/o/videoplayback%20(1).mp4?alt=media&token=61856584-b430-4eb2-b6e8-1e92bb7b587f" type="video/mp4">
                                </video>
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
                            <button type="button" class="btn btn-pertama">Add Video</button>
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
            <script src="https://cdn.plyr.io/3.2.0/plyr.js"></script>
            <script>
                /*<![CDATA[*/
                const players = Array.from(document.querySelectorAll('.js-player')).map(player => new Plyr(player)); /*]]>*/
            </script>
            <script src="assets/js/galeri.js"></script>