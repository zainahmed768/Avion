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
                        <li class="breadcrumb-item active" aria-current="page">Sign In</li>
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
                        <h3>Sign In</h3>
                        <p>Does'nt Have an account? <a href="Sign-up.php">Sign Up</a> </p>
                    </div>
                    <div class="add-new-address">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" id="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" id="Password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-right">
                                    <a href="forgot-password.php">Forgets Password?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <div class="add-new-method">

                                            <button type="button" onclick="location.href='profile.php'" class="btn">SIGN IN</button>
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