<div class="container my-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
           <h5 class="font-weight-light h3 text-muted">Add Posts</h5>
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                            <?= form_error('title'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">Category</label>
                            <select name="category" class="form-control" id="">
                                <option value="" hidden selected disabled>select</option>
                                <?php foreach($category as $cat): ?>
                                <option value="<?= $cat->id; ?>"><?= $cat->title; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <a href="#rock" class="small" data-toggle="modal">Create new Category</a>
                            <?= form_error('category'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control">
                            <?= form_error('address'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">City</label>
                            <input type="text" name="city" class="form-control">
                            <?= form_error('city'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">State</label>
                            <input type="text" name="state" class="form-control">
                            <?= form_error('state'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control-file btn btn-secondary">
                            <?php if(!empty($error)){print_r($error); } ?>
                        </div>
                    <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                            <?= form_error('description'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Brand</label>
                            <input type="city" name="brand" class="form-control">
                            <?= form_error('city'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">Model</label>
                            <input type="text" name="model" class="form-control">
                            <?= form_error('model'); ?>
                        </div>
                    <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control">
                            <?= form_error('price'); ?>
                        </div>
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
                            <input type="submit" class="btn btn-success btn-block rounded-0">
                        </div>
                    </form>
                                                <div class="modal fade" role="dialog" id="rock">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <form action="<?= base_url('home/add_category'); ?>" method="post">
                                                        <div class="form-group">
                                                            <label for="">Title</label>
                                                            <input type="text" name="title" class="form-control">
                                                        </div>
                                                    <div class="form-group">
                                                            <label for="">Description</label>
                                                           <textarea name="description" id="" cols="30" rows="7" class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" name="send" class="btn btn-info">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div> 