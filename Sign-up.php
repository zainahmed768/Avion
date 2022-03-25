<!-- header starts here -->
<?php include 'inc/app.php' ?>
<!-- header ends here -->
<!-- css file -->
<link rel="stylesheet" href="css/checkout.css">
<link rel="stylesheet" href="css/Sign-up.css">
<!-- breadcrumbs sec starts here -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumbs sec ends here -->
<section class="checkout">
    <div class="container">
        <form action="thank-you.php">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 kip">
                    <div class="first-top-bar">
                        <h3>Sign Up</h3>
                        <p>Already Have an account? <a href="login.php">Log in</a> </p>
                    </div>
                    <div class="add-new-address">
                        <!-- <div class="form-group mb-4">
                            <label for="method">Shipment Method</label>
                            <select id="method" class="form-control">
                                <option selected="">Select Shipment method</option>
                                <option>Select Shipment method 1</option>
                                <option>Select Shipment method 2</option>
                                <option>Select Shipment method 3</option>
                            </select>
                        </div> -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" id="Password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Password">Confirm Password</label>
                                    <input type="password" id="Password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="apartmnt">Suite, Apartment, etc </label>
                                    <input type="text" id="apartmnt" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" id="city" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="region">Country/Region</label>
                                    <input type="text" id="region" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" id="state" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="zip-code">Zip Code</label>
                                    <input type="text" id="zip-code" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Agree to Terms & conditions</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <div class="add-new-method">

                                            <button type="button" class="btn" onclick="location.href='index.php'">SIGN UP</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="payment-details">

                        <div class="saved-payment-method">

                            <!-- Saved payments Method -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </form>
    </div>
</section>
<!-- footer starts here -->
<?php include 'inc/footer.php' ?>
<!-- footer ends here -->