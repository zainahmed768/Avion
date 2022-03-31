<!-- header starts here -->
<?php include 'inc/app.php' ?>
<!-- header ends here -->
<!-- css file starts here -->
<link rel="stylesheet" href="css/add-to-cart.css">
<!-- css file ends here -->
<!-- breadcrumbs sec starts here -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add to Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumbs sec ends here -->
<!-- add to cart sec starts here -->
<section class="add-to-cart">
    <div class="container">
        <div class="row rowt">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="cart-items-wrapper">
                            <div class="single-cart-wrapper mb-4">
                                <div class="single-cart-img-wrapper">
                                    <figure>
                                        <img src="img/add-to-cart.png" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="single-cart-content-wrapper">
                                    <h4>Abkhazia 1994 Groucho Marx & John
                                        Lennon Commemoration m/sheet </h4>
                                    <p>Our Ref: <span>67451</span></p>
                                    <div class="number">
                                        <span class="plus">+</span>
                                        <input type="text" value="01">
                                        <span class="minus">-</span>
                                    </div>
                                    <h6>Total : <span class="total-price">£1052.00</span></h6>
                                </div>
                                <button><i class="fa fa-close"></i></button>
                            </div>
                            <div class="single-cart-wrapper">
                                <div class="single-cart-img-wrapper">
                                    <figure>
                                        <a href="#">
                                            <img src="img/add-to-cart2.png" class="img-fluid" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="single-cart-content-wrapper">
                                    <h4>Abkhazia 1994 Groucho Marx & John
                                        Lennon Commemoration m/sheet </h4>
                                    <p>Our Ref: <span>67451</span></p>
                                    <div class="number">
                                        <span class="plus">+</span>
                                        <input type="text" value="01">
                                        <span class="minus">-</span>
                                    </div>
                                    <h6>Total : <span class="total-price">£1052.00</span></h6>
                                </div>
                                <button><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self">
                        <div class="order-summry-wrapper">
                            <div class="summary-content-wrapper">
                                <h4>Order Summary</h4>
                                <h5>Shipping : £250</h5>
                                <h5>Sub Total : £3025</h5>
                                <p class="mb-4">Taxes and discounts will be calculated at checkout</p>
                                <h3>Other Delivery options available for you</h3>
                                <div class="delievery-btn-wrapper mb-4">

                                    <button class="btn">STANDARD DELIVERY - £1.00 </button>
                                    <button class="btn"> UK REGISTERED DELIVERY - £1.00</button>

                                </div>
                                <button onclick="location.href='Item-details.php'" class="btn up-btn">UPDATE</button>
                                <button onclick="location.href='checkout.php'" class="btn up-btn">CHECKOUT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- add to cart sec ends here -->
<!-- footer starts here -->
<?php include 'inc/footer.php' ?>
<!-- footer ends here -->