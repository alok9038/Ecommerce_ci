<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Old sale :: Free classifieds in India, Buy and Sell for free anywhere in India with oldsale Online Classified Advertising</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/24429d851b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body class="bg-light">
    <style>
        .sell {
            border-radius: 25px;
        }

    </style>
    <nav class="navbar-expand-lg navbar-dark navbar  p-3 px-5 sticky-top" style="background-image: linear-gradient( 108deg,  rgba(2,93,145,1) 17.3%, rgba(0,156,222,1) 77.6% );">
        <a href="<?= base_url('home/index'); ?>" class="navbar-brand ">Old Sale</a>
        <form action="<?= base_url('home/search'); ?>" method="get" class="form-inline mx-auto">
            <div class="input-group">
                <input type="search" name="search" size="70" class="form-control  rounded-0" placeholder="search here">
                <div class="input-group-append">
                    <button class="btn bg-secondary text-light rounded-0"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?= base_url('home/index'); ?>" class="nav-link">Home</a></li>
            <?php if(!$this->session->userdata("user")): ?>
            <li class="nav-item"><a href="<?= base_url('auth/login'); ?>" class="nav-link"><i class="fas fa-user"></i> Login</a></li>
            <li class="nav-item"><a href="<?= base_url('auth/signup'); ?>" class="nav-link">Signup</a></li>
            <?php else: ?>
            
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-capitalize"><?= $user['0']->name; ?></span>
                                    <img src="<?= base_url('assets/images/avatar1.png'); ?>" alt="" class="rounded-circle bg-dark" style="height:26px;">
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item  text-muted small" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 "></i>Profile</a>
                        <a class="dropdown-item text-muted small" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 "></i>Setting</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item text-muted small"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>Logout</a>
                    </div>
                </div>
            </li>
            <li class="nav-item"><a href="<?= base_url('home/add_post'); ?>" class="btn btn-light ml-2"><i class="fas fa-plus"></i> Sell</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm py-0 px-5 bg-white cat">
        <ul class="navbar-nav">
            <li class="nav-item small"><a href="<?= base_url('home/index'); ?>" style="font-size:15px; font-weight: 500;" class="nav-link"><span>Home</span></a></li>
            <?php foreach($category as $cat): ?>
            <li class="nav-item small"><a href="<?= base_url('home/category/'.$cat->id); ?>" style="font-size:15px; font-weight: 500;" class="nav-link"><span class=""><?= $cat->title; ?></span></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
