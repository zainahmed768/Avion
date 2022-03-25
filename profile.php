<?php include 'inc/app.php'; ?>
<!-- Css Link  -->
<link rel="stylesheet" href="css/profile.css">
<!-- Css Link  -->
<!-- breadcrumbs sec starts here -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumbs sec ends here -->
<!-- Profile section  -->
<section class="profile-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="img-and-username-wrapper">
                    <div class="profile-img">
                        <figure>
                            <img src="img/profile.png" class="img-fluid" alt="">
                            <a href="#" class="chnage">Change image</a>
                        </figure>
                        <!-- <div class="edit-img">
                            <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </div> -->
                    </div>
                    <div class="username mt-4">
                        <h3 class="username">John Doe</h3>
                    </div>
                </div>
                <div class="for-proflie">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">My Wishlist</a>
                        </li>
                    </ul>

                    <div class="sign-out">
                        <button class="btn" onclick="location.href='index.php'">SIGN OUT</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="Accounts">
                                    <h5>Account</h5>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="first-name">
                                            <h4>First Name</h4>
                                            <h3>James</h3>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="first-name">
                                            <h4>Last Name</h4>
                                            <h3>Anderson</h3>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="first-name">
                                            <h4>Phone</h4>
                                            <h3><a href="tel:+1 (322) 422 654">+1 (322) 422 654</a></h3>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="address">
                                            <h4>Address</h4>
                                            <h3>Georgio State 4128, Lorem ipsum doler simut washington dc</h3>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row for-allign">
                                    <div class="col-md-6">
                                        <div class="address">
                                            <h4>Primary Email</h4>
                                            <h3>Jamesanderson@gmail.com</h3>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="********">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="password-btn">
                                            <a href="Profile-New-Password.php">Change Password</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button class="btn">EDIT PROFILE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="order-table-wrapper table-responsive">
                                    <!-- <h3 class="form-heading">My Orders</h3> -->
                                    <table>
                                        <tbody>
                                            <tr class="row1">
                                                <th class="order-no">OrderNo</th>
                                                <th class="order-date">Order Date</th>
                                                <th class="order-status">Status</th>
                                                <th class="order-total">Total</th>
                                                <th class="details"></th>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <!-- <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td> -->
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a class="order-details-btn" data-toggle="modal" data-target="#exampleModalLong">view Details</a>
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <!-- <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td> -->
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a href="#">view Details</a>
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <!-- <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td> -->
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a href="#">view Details</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- pagination starts here -->
                                <div class="pagination-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a class="number active" href="#">1</a></li>
                                        <li><a class="number" href="#">2</a></li>
                                        <li><a class="number" href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                                <!-- pagination starts here -->
                            </div>
                        </div>

                        <!-- Modal starts here-->
                        <!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="model-header pt-5">
                                        <h5 class="modal-title" id="exampleModalLongTitle">OrderNo</h5>
                                        <h6>#1084598423154</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <h6 class="text-center mb-4">Product Detail</h6>
                                        <div class="my-orders-products">
                                            <div class="product-deatail-wrapper my-3 active">
                                                <div class="product-img">
                                                    <figure>
                                                        <img src="assets/images/profile/product.png" class="img-fluid" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">JSC FASHION WOMEN'S BAG</h5>
                                                    <h6 class="product-size">X3 | 2XL | Sliver</h6>
                                                </div>
                                                <div class="product-price">
                                                    <h6 class="product-price">$158.07 </h6>
                                                </div>
                                            </div>
                                            <div class="product-deatail-wrapper my-3">
                                                <div class="product-img">
                                                    <figure>
                                                        <img src="assets/images/profile/product.png" class="img-fluid" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">JSC FASHION WOMEN'S BAG</h5>
                                                    <h6 class="product-size">X3 | 2XL | Sliver</h6>
                                                </div>
                                                <div class="product-price">
                                                    <h6 class="product-price">$158.07 </h6>
                                                </div>
                                            </div>
                                            <div class="product-deatail-wrapper my-3">
                                                <div class="product-img">
                                                    <figure>
                                                        <img src="assets/images/profile/product.png" class="img-fluid" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">JSC FASHION WOMEN'S BAG</h5>
                                                    <h6 class="product-size">X3 | 2XL | Sliver</h6>
                                                </div>
                                                <div class="product-price">
                                                    <h6 class="product-price">$158.07 </h6>
                                                </div>
                                            </div>
                                            <div class="product-deatail-wrapper my-3">
                                                <div class="product-img">
                                                    <figure>
                                                        <img src="assets/images/profile/product.png" class="img-fluid" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">JSC FASHION WOMEN'S BAG</h5>
                                                    <h6 class="product-size">X3 | 2XL | Sliver</h6>
                                                </div>
                                                <div class="product-price">
                                                    <h6 class="product-price">$158.07 </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="text-center">Order Detail</h6>
                                            <div class="order-details-wrapper mt-5">
                                                <h6><span>Date :</span> <span class="date">#10005165551651</span></h6>
                                                <h6><span>Subtotal :</span> <span class="subtotal">$785.00</span></h6>
                                                <h6><span>Tax fee :</span> <span class="tax-fee">$80.00</span></h6>
                                                <h6><span>Shipping Fee :</span> <span class="shipping-fee">$5.00</span>
                                                </h6>
                                                <h6><span>Coupon Discount :</span> <span class="Coupon">$50.00</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="order-details pb-5">
                                            <h6 class="text-center">Shipment</h6>
                                            <div class="order-details-wrapper mt-5">
                                                <h6><span>Estimated Arrival:</span> <span class="date">24
                                                        November</span></h6>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Modal ends here-->
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="everything">
                            <h3 class="heading">My Wishlist</h3>
                            <div class="wishlist-table-wrapper">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="row1">
                                            <th class="wishlist-imgs-col"></th>
                                            <th class="product-name">PRODUCT NAME</th>
                                            <th class="unit-price">UNIT PRICE</th>
                                            <th class="delete-row"></th>
                                        </tr>
                                        <tr class="row2">
                                            <td class="wishlist-images">
                                                <img src="img/wishlist-img1.png" class="img-fluid wishlist-img" alt="">
                                            </td>
                                            <td class="pro-name">
                                                Sample Postal Stamp
                                            </td>
                                            <td class="unitr-pro">
                                                $158.07
                                            </td>
                                            <td class="row-close">
                                                <button><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                        <tr class="row2">
                                            <td class="wishlist-images">
                                                <img src="img/wishlist-img2.png" class="img-fluid wishlist-img" alt="">
                                            </td>
                                            <td class="pro-name">
                                                Sample Postal Stamp
                                            </td>
                                            <td class="unitr-pro">
                                                $158.07
                                            </td>
                                            <td class="row-close">
                                                <button><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                        <tr class="row2">
                                            <td class="wishlist-images">
                                                <img src="img/wishlist-img3.png" class="img-fluid wishlist-img" alt="">
                                            </td>
                                            <td class="pro-name">
                                                Sample Postal Stamp
                                            </td>
                                            <td class="unitr-pro">
                                                $158.07
                                            </td>
                                            <td class="row-close">
                                                <button><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="pagination-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a class="number active" href="#">1</a></li>
                                    <li><a class="number" href="#">2</a></li>
                                    <li><a class="number" href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of Profile section  -->

<?php include 'inc/footer.php'; ?>