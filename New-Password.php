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
                <div class="col-lg-2"></div>
                <div class="col-lg-8 kip">
                    <div class="first-top-bar">
                        <h3>Password</h3>
                    </div>
                    <div class="add-new-address">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" id="NewPassword" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ConfirmNewPassword">Confirm New Password</label>
                                    <input type="password" id="ConfirmNewPassword" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row align-items-center">
                                   
                                    <div class="col-lg-12 text-right">
                                        <div class="add-new-method">

                                            <button type="button" class="btn">CONFIRM</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2"></div>
            </div>
        </form>
    </div>
</section>
<!-- footer starts here -->
<?php include 'inc/footer.php' ?>
<!-- footer ends here -->