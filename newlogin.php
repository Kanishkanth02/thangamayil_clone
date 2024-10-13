<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="nav1">
        <div class="icons1">
            <a href="#">AUSPICIOUS DAY</a>
            <a href="#">QUICK PAY</a>
            <a href="#">BLOG</a>
        </div>
    </div class="marquee">
    <marquee behavior="scroll" direction="left">GOLD RATE 22k (1gm) - ₹6660 , GOLD RATE 24k (1gm) - ₹7265 , GOLD RATE 18k (1gm) - ₹5449 , SILVER RATE (1gm) - ₹86.50</marquee>
</div>
    </div>

    <div class="nav">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="icons">
            <a href="newlogin.php">Login</a>
            <a href="cart.html">Cart</a>
            <a href="payment.html">Payment</a>
        </div>
    </div>
    <div class="navbar">
        <a href="home.html">HOME</a>
        <a href="jewels.html">GOLD JEWELLERY</a>
        <a href="diamond.html">DIAMOND</a>
        <a href="silver.html">SILVER</a>
        <a href="#">COINS</a>
        <a href="#">GIFTS (PUNNAGAI)</a>
        <a href="cart.html">CART</a>
        <a href="checkout.html">CHECKOUT</a>
    </div>
    <div>
        <h1><br>Create New Customer Account</h1>
    </div>
        <div class="form-container">
            <h2>Sign in Information</h2>
            <form action="db.php" method="post">
                <input type="text" name="name" placeholder="Name" required><br>
                <input type="text" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
                <input type="submit" value="Create Account">
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>©Copyright 2023 by Thangamayil Jewellery Limited. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
