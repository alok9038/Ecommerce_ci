<div class="container-fluid bg-danger py-5" style="background:url('<?= base_url('assets/images/279547.jpg'); ?>') ; background-size:cover; background-attachment:fixed; height:100vh;">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card broder-5 border-info text-light" style="background:rgba(54, 54, 54, 0.67); text-light">
               <div class="card-header border-0 ">
                   <h5 class="text-light lead">Login</h5>
                   <hr class="bg-secondary">
               </div>
                <div class="card-body mt-n3">
                    <form action="" method="post">
                        
                    <div class="form-group">
                            <label for="">Contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                    
                    <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    
                        <div class="form-group mt-4">
                            <input type="submit" class="btn btn-theme btn-block rounded-0">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('auth/login'); ?>" class="text-light">Create an account</a>
                </div>
            </div>
        </div>
    </div>
</div>