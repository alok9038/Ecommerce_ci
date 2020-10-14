<div class="container my-5">
    <div class="row">
        <div class="col-lg-5">
            <div class="thumbnail pt-4">
                <img src="<?= base_url('./uploads/'.$product->image); ?>" class="img-fluid w-100 bg-light" style="object-fit:fit; height:420px;" alt="">
                <div class="button-section row mt-3">
                    <button class="col-sm-4 btn bg-theme border-0 text-white rounded-0 mx-auto">Contact with seller</button>
                    <button class="col-sm-4 btn btn-success mx-auto rounded-0">view contact</button>
                </div>
            </div>
        </div>
        <div class="col-lg-7 pt-4">
        <h4 class="h5"><b><?= $product->title; ?></b></h4>

        <div class="row">
              <div class="col-sm-2">
                <span class="badge badge-success">4.6 <i class="fa fa-star"></i></span>
              </div>
           
              <div class="col-sm-6">
                <strong class="small">7,021 Ratings & Reviews</strong>
<i class="fa fa-star checked text-warning"></i>
<i class="fa fa-star checked text-warning"></i>
<i class="fa fa-star checked text-warning"></i>
<i class="fa fa-star text-warning"></i>
<i class="fa fa-star-half-alt text-warning"></i>
              </div>
           
          </div>
          <div class="mt-3 text-success">
          <h3>₹ <?= $product->price; ?></h3> 
         </div>
           
         <div class="mt-4">
                  
          <h5 class="small"><span class="glyphicon glyphicon-calendar">
            
          </span> EMIs from <strong>Rs 4,500/month </strong><a href="">View Plans <i class="fa fa-chevron-right"></i></a></h5>  
           
           <h5 class="small"><span class="glyphicon glyphicon-tag"></span>
            <strong> Bank Offer</strong> 10% Instant Discount on Visa Cards for First 3 Online Payments. <a href="">T&C</a></h5>
           
           <h5 class="small"><span class="glyphicon glyphicon-tag">
             
           </span><strong> Bank Offer</strong> Extra 7% off* with Axis Bank Buzz Credit Card. <a href="">T&C</a></h5>
         
         </div>    
          
           <br> 
         <div class="row">
          
           <div class="col-sm-9">
             
             <h5 class="text-info h6">Brand Warranty of 6 months <a href="#" ><b style="color: black">Know More</b></a></h5>
           </div>
         </div>
         <br>
           
           <div class="row">
             
             <div class="col-sm-6 text-muted small">
               <strong>Description</strong>
                <br><br>
              <?= $product->description; ?>
              
              
              
              </div>
             
        </div>
    </div>
</div>


<div class="container my-5">
    <h5 class="text-muted h4 font-weight-light">Related Products</h5>
    <hr>
    <div class="row mt-4">
        <?php foreach($products as $product): ?>
        <div class="col-lg-3 mb-5">
            <div class="card border-0 shadow rounded-0 pro-card" style="height:350px;">
                <img src="<?= base_url('uploads/'.$product->image); ?>"  alt="" class="rounded-lg " style="object-fit:fit; height:220px;">
                <div class="card-body">
                    <h5><a href="<?= base_url('home/product/'.$product->id); ?>" class="stretched-link text-dark h6" style="text-decoration:none;"><?= substr($product->title,0,25); ?></a></h5>
                    <p class="small mt-n2 mb-2"><?= $product->brand; ?></p>
                    <p class="text-info font-weight-bold mt-n1">₹ <?= $product->price; ?>/-
                    <span class="float-right text-muted text-capitalize font-weight-light"><i class="fas fa-map-marker-alt"></i> <?= $product->city; ?></span>
                    </p>
                    
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>