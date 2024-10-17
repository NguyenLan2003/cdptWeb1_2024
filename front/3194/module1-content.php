<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Footer Section -->
<footer class="bg-light text-dark pt-5">
    <div class="container">
        <div class="row">
            <!-- Company Section -->
            <div class="col-md-3">
                <h5>Company</h5>
                <p>Find a location nearest you. See <a href="#">Our Stores</a></p>
                <p>+391 (0)35 2568 4593</p>
                <p>hello@domain.com</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-vimeo"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <!-- Useful Links Section -->
            <div class="col-md-3">
                <h5>Useful links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">New Products</a></li>
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">Bundle & Save</a></li>
                    <li><a href="#">Online Gift Card</a></li>
                </ul>
            </div>

            <!-- Information Section -->
            <div class="col-md-3">
                <h5>Information</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Start a Return</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Shipping FAQ</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Subscribe Section -->
            <div class="col-md-3">
                <h5>Good emails.</h5>
                <p>Enter your email below to be the first to know about new collections and product launches.</p>
                <form class="d-flex">
                    <input type="email" class="form-control me-2" placeholder="Enter your email address">
                    <button class="btn btn-dark" type="submit">Subscribe</button>
                </form>
                <div class="payment-icons mt-3">
                    <img src="https://img.icons8.com/color/48/000000/amex.png" alt="AMEX">
                    <img src="https://img.icons8.com/color/48/000000/apple-pay.png" alt="Apple Pay">
                    <img src="https://img.icons8.com/color/48/000000/google-pay.png" alt="Google Pay">
                    <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" alt="MasterCard">
                    <img src="https://img.icons8.com/color/48/000000/paypal.png" alt="PayPal">
                    <img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">

                <p>&copy; Glowing 2021</p>
                <h5>GLOWING</h5>
            </div>
        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script src="./js/app.js"></script>