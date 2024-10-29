<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang bán giày</title>
    <link rel="stylesheet" href="{{ asset('css/newarrival.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h2 class="page-title">New Arrival</h2>
        <a href="{{ url('/homepage') }}" class="back-button"><i class="fa-solid fa-arrow-left"></i> Back to Homepage</a>
        <section class="new-arrivals">
            <div class="product">
                <div class="product-image">
                    <img src="{{ asset('images/smartsneakers.png') }}" alt="Smart Sneakers">
                    <span class="sale">SALE</span>
                    <a href="#" class="cart-icon"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="product-info">
                    <h3>Smart Sneakers</h3>
                    <p>$12</p>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="{{ asset('images/classicelegance.png') }}" alt="Classic Elegance">
                    <span class="sale">SALE</span>
                    <a href="#" class="cart-icon"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="product-info">
                    <h3>Classic Elegance</h3>
                    <p>$17</p>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="{{ asset('images/adventuretrekker.png') }}" alt="Adventure Trekker">
                    <span class="sale">SALE</span>
                    <a href="#" class="cart-icon"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="product-info">
                    <h3>Adventure Trekker</h3>
                    <p>$15</p>
                </div>
            </div>
        </section>

        <section class="offer">
            <img class="full-width-image" src="{{ asset('images/limitedoffer.png') }}" alt="Limited Offer">
            <div class="offer-content">
                <h3>LIMITED OFFER</h3>
                <p>35% off only this Friday and get special gift</p>
                <a href="#" class="btn">Grab it now</a>
            </div>
        </section>

        <section class="newsletter">
            <h2>Subscribe to our newsletter</h2>
            <p>Get 20% off on your first order just by subscribing to our newsletter</p>
            <form>
                <input type="email" placeholder="Enter your email">
                <button type="submit">Subscribe</button>
            </form>
            <p>You will be able to unsubscribe at any time. <a href="#">here</a></p>
        </section>
    </div>
</body>
</html>