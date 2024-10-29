<!DOCTYPE html>
<html>
<head>
    <title>Selling page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/category.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="categories">
        <h2>Categories</h2>
        <div class="category">
            <img src="<?php echo e(asset('images/menshoes.png')); ?>" alt="">
            <p>Men</p>
            <a href="/category/men" class="arrow-button"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="category">
            <img src="<?php echo e(asset('images/women.png')); ?>" alt="">
            <p>Women</p>
            <a href="/category/women" class="arrow-button"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="category">
            <img src="<?php echo e(asset('images/kidshoes.png')); ?>" alt="">
            <p>Kids</p>
            <a href="/category/kids" class="arrow-button"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="products">
        <h2>Trending Now</h2>
        <div class="product">
            <img src="<?php echo e(asset('images/nikeairmax270.png')); ?>" alt="">
            <div class="product-info">
                <h3>Nike Air Max 270</h3>
                <p>$145</p>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
        <div class="product">
            <img src="<?php echo e(asset('images/nikemenair.png')); ?>" alt="">
            <div class="product-info">
                <h3>Nike Air Max 270</h3>
                <p>$145</p>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
        <div class="product">
            <img src="<?php echo e(asset('images/nikeairforce1.png')); ?>" alt="">
            <div class="product-info">
                <h3>Nike Air Max 270</h3>
                <p>$145</p>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </section>
</body>
</html><?php /**PATH C:\xampp\htdocs\Doan-laravel\resources\views/category.blade.php ENDPATH**/ ?>