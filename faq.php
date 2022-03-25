<!-- header starts here -->
<?php include 'inc/app.php' ?>
<!-- header ends here -->
<!-- css file starts here -->
<link rel="stylesheet" href="css/faq.css">
<!-- css file ends here -->
<!-- breadcrumbs sec starts here -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ's</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumbs sec ends here -->
<!-- faq sec starts here -->
<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="faq-wrapper">
                    <div class="faq-heading-wrapper">
                        <h2>The Most Frequently Asked Questions</h2>

                    </div>
                    <div id="accordion">

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOnes">
                                <i class="fa fa-angle-down"></i>   Lorem ipsum doler sit amet?
                                </a>
                            </div>
                            <div id="collapseOnes" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Luctus venenatis lectus magna fringilla urna.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                <i class="fa fa-angle-down"></i>  What to go with the burger?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Luctus venenatis lectus magna fringilla urna.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                <i class="fa fa-angle-down"></i>  You want to resell the product, is that possible?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Luctus venenatis lectus magna fringilla urna.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                   <i class="fa fa-angle-down"></i> I want to be a a chef, Can I?
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Luctus venenatis lectus magna fringilla urna.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- faq sec ends here -->
<!-- footer starts here -->
<?php include 'inc/footer.php' ?>
<!-- footer ends here -->