<section class="section-container my-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 mx-auto">
            <div class="flat-card mb-4">
                <div class="flat-card-header">
                    <h4 class="flat-card-title">Login</h4>
                </div>
                <form class="flat-card-body" method="post" action="<?= base_url('Login'); ?>">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="form-group">
                        <input type="email" class="form-control" name="t_email" value="" required />
                        <label>Email</label>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="t_password" value="" required />
                        <label>Password</label>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>')?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-pertama">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>