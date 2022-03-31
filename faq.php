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
                                    <i class="fa fa-angle-down"></i> Do you offer discounts?
                                </a>
                            </div>
                            <div id="collapseOnes" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, the following discounts will automatically apply at checkout:</p>
                                    <p>1. Orders over £50 - receive 10% discount</p>
                                    <p>2. Orders over £100 - receive 15% discount </p>
                                    <p>3. Orders over £250 - receive 20% discount</p>
                                    <p>Note - discounts only apply on the Avion Stamps website and not on any other platform</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    <i class="fa fa-angle-down"></i> If I do not want to use my credit card, what other options are there for payment?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We are happy to accept payment through any of the following</p>
                                    <p>1) By Sterling cheque, money order or bank draft made payable to "AVION STAMPS" please allow for postage.</p>
                                    <p>2) A blank cheque, signed and marked "not to exceed £ ..." will facilitate prompt despatch.</p>
                                    <p>3) Bank transfer to SANTANDER, quoting "AVION THEMATICS" sorting code 09-07-20 account No. 01921126.
                                        (Please add £2.50 for bank charges and allow for postage)</p>
                                    <p>4) By Paypal</p>
                                    <p>5) By credit card through Stripe</p>
                                    <p>6) By US dollar bills or Euro Notes - please check with us beforehand to establish the exchange rate.</p>
                                    <p>7) In cash - Sterling notes only - if paying by this method, you are strongly advised to use registered or Special Delivery mail</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    <i class="fa fa-angle-down"></i> What will the postage cost me?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    FOR UK ORDERS
                                    <li> Orders up to £75 in value - £1.00*</li>
                                    <li> Orders from £75.01 to £250 - £2.50*</li>
                                    <li> Orders over £250 - £8.50</li>
                                    <li> Special delivery = £6.00 extra</li>
                                      OVERSEAS
                                    <li> Orders up to £50 in value - £2.75*</li>
                                    <li> Orders over £50 - £8.75 Internationa; Tracked and/or Signed</li>
                                    <li> International Tracked and/or Signed = £6.00 extra</li>
                                    <p>Where practical, commemorative stamps will be used.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                    <i class="fa fa-angle-down"></i> If I want to return an order, what is the procedure?
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>In accordance with the consumer protection (distance selling) regulations 2000, you have 7 working days from receipt of your order to
                                        return the items in the same condition as received for a refund. A handling charge of £5 however will be imposed.</p>
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