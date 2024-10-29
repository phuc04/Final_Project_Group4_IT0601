<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Shop</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/homepage.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <a href="#">Shop</a>
            <a href="#">Most Wanted</a>
            <a href="<?php echo e(url('/newarrival')); ?>">New Arrival</a>
            <a href="#">Brands</a>
            <a href="#">Support</a>
            <form>
                <input type="text" placeholder="Search">
                <button>Search</button>
            </form>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="#"><i class="fa-solid fa-user"></i></a>
        </nav>
    </header>

    <section class="hero">
        <img src="<?php echo e(asset('images/shopgiay.png')); ?>" alt="">
        <h1>DISCOVER LIMITED SNEAKERS WITHOUT LIMITATION</h1>
        <button>Shop Now</button>
    </section>

    <section class="brands">
        <h2>Brands</h2>
        <div class="brand-logos">
            <img src="<?php echo e(asset('images/nike.png')); ?>" alt="">
            <img src="<?php echo e(asset('images/puma.png')); ?>" alt="">
            <img src="<?php echo e(asset('images/reebok.png')); ?>" alt="">
            <img src="<?php echo e(asset('images/fila.png')); ?>" alt="">
            <img src="<?php echo e(asset('images/adidas.png')); ?>" alt="">
            <img src="<?php echo e(asset('images/newbalance.png')); ?>" alt="">
            <img src="<?php echo e(asset('images/basic.png')); ?>" alt="">
        </div>
        <div class="p-container">
            <p>We provide best customer experiences</p>
            <p>We ensure our customers have the best shopping experiences</p>
        </div>
    </section>

    <footer>
        <div class="footer-item">
            <i class="fa-solid fa-box"></i>
            <h3>Original Products</h3>
            <p>We provide money back guarantee if the product are not original.</p>
        </div>
        <div class="footer-item">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3>Satisfaction Guarantee</h3>
            <p>Exchange the product you've purchased if it doesn't fit on you.</p>
        </div>
        <div class="footer-item">
            <i class="fa-solid fa-calendar-days"></i>
            <h3>New Arrival Everyday</h3>
            <p>We updates our collection almost everyday.</p>
        </div>
        <div class="footer-item">
            <i class="fa-solid fa-truck-fast"></i>
            <h3>Fast & Free Shipping</h3>
            <p>We offer fast and free shipping for our loyal customers.</p>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\Doan-laravel\resources\views/homepage.blade.php ENDPATH**/ ?>