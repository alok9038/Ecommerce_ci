<div class="container-fluid bg-danger py-5" style="background:url('<?= base_url('assets/images/279547.jpg'); ?>') ; background-size:cover; background-attachment:fixed;">
    <div class="row">
       <div class="col-lg-7">
           <div id="Controls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
    <li data-target="#Controls" data-slide-to="0" class="active"></li>
    <li data-target="#Controls" data-slide-to="1"></li>
    <li data-target="#Controls" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
       <div class="container " style="height: 700px;">
                  <h1 class="text-white display-3">Lorem ipsum dolor !</h1>
                  <h1 class="display-1 text-info">Website Development</h1>
                  <h6 class="text-white lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quo sunt earum, molestias temporibus ducimus eum culpa totam hic,</h6>
                </div>
    </div>
    <div class="carousel-item">
       <div class="container " style="height: 700px;">
           <h1 class="text-info display-1">Lorem ipsum</h1> <h1 class="text-white display-1">forYour Futuristic Idea!</h1>
                    <h6 class="text-white lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore!</h6>
                  </div>
    </div>
    <div class="carousel-item">
     <div class="container" style="height: 700px;"> 
         <h1 class="text-white display-3">Quality Services by</h1><h1 class="text-info font-weight-light display-1 ">OldSale</h1>

        <h6 class="text-white lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati accusantium, nostrum assumenda, itaque eveniet dolorem dolorum deserunt quasi fugiat ad id quidem voluptate facilis officiis maxime sit. Vel, cum, saepe?</h6></div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#Controls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#Controls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
       </div>
        <div class="col-lg-5">
            <div class="card broder-5 border-info text-light" style="background:rgba(54, 54, 54, 0.67); text-light">
               <div class="card-header border-0">
                   <h5 class="text-light lead ">Create Account</h5>
               </div>
                <div class="card-body">
                    <form action="<?= base_url('auth/signup'); ?>" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                            <?= form_error('name'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">Contact</label>
                            <input type="text" name="contact" class="form-control">
                            <?= form_error('contact'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                            <?= form_error('email'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">City</label>
                            <input type="text" name="city" class="form-control">
                            <?= form_error('city'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                            <?= form_error('password'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">confirm password</label>
                            <input type="<password></password>" name="confirm_password" class="form-control">
                            <?= form_error('confirm_password'); ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="sign up" class="btn btn-theme btn-block rounded-0">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('auth/login'); ?>" class="text-light">already have an account..!</a>
                </div>
            </div>
        </div>
    </div>
</div>