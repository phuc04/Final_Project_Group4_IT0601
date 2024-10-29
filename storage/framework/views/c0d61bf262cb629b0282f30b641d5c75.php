<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="<?php echo e(asset('images/logo-btec.png')); ?>" alt="BTEC Logo">
            <h2>Login</h2>
            <input type="email" placeholder="a@gmail.com">
            <input type="password" placeholder="Password">
            <a href="<?php echo e(url('/homepage')); ?>"><button>LOGIN</button></a> <!-- Chuyển hướng đến trang chủ -->
        </div>
        <div class="right">
            <h2>Hello, Friend!</h2>
            <p>If you don't have account, please sign up here!!</p>
            <a href="<?php echo e(url('/signup')); ?>"><button>SIGN UP</button></a> <!-- Chuyển hướng đến trang đăng ký -->
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Doan-laravel\resources\views/login.blade.php ENDPATH**/ ?>