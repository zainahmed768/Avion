<?php include 'inc/app.php'; ?>
<!-- css starts here -->
<link rel="stylesheet" href="css/contact-us.css">
<!-- css ends here -->
<!-- breadcrumbs sec starts here -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">CONTACT US</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumbs sec ends here -->
<!-- contact us form starts here -->
<section class="contact-us">
    <div class="container">
        <div class="row con">
            <div class="col-lg-6 align-self-center">
                <figure>
                    <img src="img/contact-us.webp" class="img-fluid" alt="">
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="contact-form-wrapper">
                    <div class="contact-form-heading-wrapper">
                        <h2>CONTACT US FORM </h2>
                        <p>Your email address will not be published. Please fill in all fields</p>
                    </div>
                    <form action="">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="Last-Name">Last Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="contact-number">Contact Number</label>
                                <input type="phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea name="" class="form-control" id="" cols="30" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="form-control">SUBMIT NOW</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact us form ends here -->
<?php include 'inc/footer.php'; ?>