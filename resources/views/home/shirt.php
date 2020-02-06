<?php $this->layout('layouts/app');?>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Portfolio Grid -->
    <section class="bg-light page-section" id="portfolio">
        <div class="container">

    <div class="container">

            <div class="container">
                <div>
                    <div class="logo" id="logo">
                        <img src="<?=$this->asset('/images/logo2.png')?>" alt="" id="logo" width="225px" height="225px">
                    </div>
                    <div class="row" id="selectItem">
                        <div class="col-lg-12">
                            <hr class="new5">
                            <div class="section_title text-center mb-90">
                                <span></span>
                                <h3>Choose what you
                                    want
                                </h3>
                                <p class="wow fadeInUp">Click the icon which type that you want to select.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service">
                            <div class="service_icon_wrap text-center">
                                <form action="../home" >
                                    <input type="image" src="<?=$this->asset('/images/shirt.png')?>" href="/resources/views/home" style="width: 90px;height: 90px;padding-top: 20px;"onsubmit="submit();" />
                                  </form>
                                <div class="info text-center">
                                    <span>
                                        <h3>Shirts</h3>
                                    </span>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service ">
                            <div class="service_icon_wrap text-center">
                                <form action="../pant">
                                    <input type="image" src="<?=$this->asset('/images/jeans.png')?>" href="/resources/views/pant" style="width: 90px;height: 90px;padding-top: 20px;"onsubmit="submit();" />
                                  </form>
                            </div>
                            <div class="info text-center">
                                <span>
                                    <h3>Pants</h3>
                                </span>

                            </div>



                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service ">
                            <div class="service_icon_wrap text-center">
                                <form action="../accessories">
                                    <input type="image" src="<?=$this->asset('/images/footprint.png')?>" href="/resources/views/accessories" style="width: 90px;height: 90px;padding-top: 20px;"onsubmit="submit();" />
                                  </form>
                            </div>
                            <div class="info text-center">
                                <span>
                                    <h3>Accessories</h3>
                                </span>

                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
            <div class="row">

                <div class="col-lg-12 text-center" id="product">
                    <hr class="new5">
                    <h2 class="section-heading text-uppercase" id="type" >Shirts</h2>
                    <h3 class="section-subheading text-muted">All products are available for all genders</h3>
                </div>
            </div>
            <div class="row">

            <?php foreach ($products as $product) : ?>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x" ></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= $product->image_path ?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?= $product->name ?></h4>
                        <p class="text-muted"><?= $product->price ?> baht</p>
                        <div>
                            <div class="container">
                                <a href="home/add/<?= $product->id ?>" class="btn btn-primary" data-dismis="modal" type="buttom"><i class="	fa fa-cart-plus"></i>
                                        Add to Cart</a>
                            </div>

                    </div>
                    </div>

                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </section>



<?php foreach ($products as $product) :?>
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase"><?= $product->name?></h2>
                                <p class="item-intro text-muted"></p>
                                <div class="container">
                                    <div class="row" style="width: 80em;,height: 80em;">
                                        <div class="col-lg-6 col-md-6">
                                            <img   src="<?= $product->image_path ?>" alt="">

                                        </div>
                                        
                                    </div>
                                
                                
                                </div>
                                
                                <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p> -->
                                <ul class="list-inline" style="font-size:1.5rem">
                                <li>Material : Cotton 50%, Polyester 50%</li>
                                <li>Color : White</li>
                                <li>Imported</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>