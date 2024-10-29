<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/signup.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="left">
            <h2 class="welcome">Welcome Back!</h2>
            <p>If you already have an account, log in here to go to the homepage</p>
            <a href="<?php echo e(url('/login')); ?>"><button class="sign-in">Sign In</button></a>
        </div>
        <div class="right">
        <img src="<?php echo e(asset('images/logo-btec.png')); ?>" alt="BTEC Logo">
            <h2>Sign Up</h2>
            <input type="email" placeholder="a@gmail.com">
            <input type="password" placeholder="Password">
            <button class="sign-up">Sign Up</button>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Doan-laravel\resources\views/signup.blade.php ENDPATH**/ ?>