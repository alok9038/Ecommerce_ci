<div class="container my-4">
    
    <?php  if(!empty($products)): ?>
    <h5 class="text-muted h4 font-weight-light">Latest Products</h5>
    <div class="row">
    <?php 
        foreach($products as $pro): ?>
        <div class="col-lg-3 my-4 col-sm-6">
            <div class="card border-0 shadow-sm pro-card">
            <a href="<?= base_url('home/product/'.$pro->id);?>">
                <img src="<?= base_url("uploads/".$pro->image);?>" alt="" class="w- border border-light img-fluid img-responsive w-100 justify-content-center d-flex" style="height:220px">
            </a>
                <div class="card-body px-3 py-4">
                   <a href="<?= base_url('home/product/'.$pro->id);?>" class="pro-link">
                       <h2 class="h6 text-theme pt-0 text-capitalize font-theme text-truncate"><?= $pro->title;?></h2></a>
                    <p class="small text-muted p-0 m-0 mt-n1"><?= $pro->brand;?></p>
                    <p class=" p-0 m-0 mt-1 font-weight-bold text-success d-inline-block">₹<?= $pro->price;?>/-</p>
                    <p class=" p-0 m-0 mt-1 float-right small text-muted d-inline-block"><span><i class="fas fa-map-marker-alt"></i> </span><?= $pro->city;?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?> 
    </div> 
        <?php  else: ?>
        
        <div class="row">
            <div class="col-3 mx-auto mt-5 pt-5 text-center">
            <h1 class="display-4 font-weight-bold text-theme">4<i class="fas fa-sad-cry "></i>4</h1>
                <h5 class="lead text-muted">Products Not Found</h5>  
                <p class="small text-muted">Please try with another category or query</p>  
            </div>
        </div>

    <?php endif;?>
</div>  

    