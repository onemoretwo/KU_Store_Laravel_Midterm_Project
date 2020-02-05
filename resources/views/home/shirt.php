<?php $this->layout('layouts/app');?>
<link rel="stylesheet" href="<?=$this->asset('/css/agency.min.css')?>">

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
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">


 <!-- <div class=" carouse">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="height: 450px;">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/cou2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/cou3-1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/cou1.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>   -->




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
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x" ></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?=$this->asset('/images/leisure.jpeg')?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Champion Leisure hoodie</h4>
                        <p class="text-muted">2,250 baht</p>
                        <div>
                            <div class="container">
                                <a href="home/add/1" class="btn btn-primary" data-dismis="modal" type="buttom"><i class="	fa fa-cart-plus"></i>
                                        Add to Cart</a>
                            </div>

                    </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?=$this->asset('/images/shirt bape.jpeg')?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Black & Purple bape shirt</h4>
                        <p class="text-muted">2,300 baht</p>
                        <div>

                        <div class="container">
                            <a href="home/add/2" class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="	fa fa-cart-plus"></i>
                                    Add to Cart</a>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?=$this->asset('/images/shirt classic white tommy.jpeg')?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Tommy Hilfiger T-shirt Boys Classic white</h4>
                        <p class="text-muted">1,160 baht</p>
                        <div>
                        <a href="home/add/3" class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="	fa fa-cart-plus"></i>
                                    Add to Cart</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?=$this->asset('/images/shirt yeezy for president.jpeg')?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Yeezy For President</h4>
                        <p class="text-muted">850 baht</p>
                        <div>
                        <div class="container">
                        <a href="home/add/4" class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="	fa fa-cart-plus"></i>
                                    Add to Cart</a>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?=$this->asset('/images/MSGM.jpeg')?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>MGSM Boys Red 'Logo' T-Shirt</h4>
                        <p class="text-muted">1,160 baht</p>
                        <div>
                        <a href="home/add/5" class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="	fa fa-cart-plus"></i>
                                    Add to Cart</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?=$this->asset('/images/shirt supreme.jpeg')?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Supreme 20th Anniversary Box Logo</h4>
                        <p class="text-muted">21,000 baht</p>
                        <div>
                        <div class="container">
                        <a href="home/add/6" class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="	fa fa-cart-plus"></i>
                                    Add to Cart</a>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Modal 1 -->
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
                                <h2 class="text-uppercase">Champion Leisure hoodie</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <div class="container">
                                    <div class="row" style="width: 80em;,height: 80em;">
                                        <div class="col-lg-6 col-md-6">
                                            <img   src="<?=$this->asset('/images/championFont.jpeg')?>" alt="">

                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <img   src="<?=$this->asset('/images/championBack.jpeg')?>" alt="">

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

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Black & Purple bape shirt</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                                <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p> -->
                                <ul class="list-inline" >
                                <li>Material : Cotton 100%</li>
                            <li>Color : Black & Purple</li>
                            <li>Imported</li>
                            <div>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Tommy Hilfiger T-shirt Boys Classic white</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                                <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p> -->
                                <ul class="list-inline">
                                <li>Material : Cotton 100%</li>
                            <li>Color : Classic White</li>
                            <li>Imported</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Yeezy For President</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                                <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p> -->
                                <ul class="list-inline">
                                <li>Material : Cotton 100%</li>
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

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">MGSM Boys Red 'Logo' T-Shirt</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                                <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p> -->
                                <ul class="list-inline">
                                <li>Material : Cotton 100%</li>
                            <li>Color : Red</li>
                            <li>Made in USA</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Supreme 20th Anniversary Box Logo</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                                <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p> -->
                                <ul class="list-inline">
                                    <li>Material : Cotton 100%</li>
                            <li>Color : Black</li>
                            <li>Imported</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
                    <div class="row" id="bottom">
                        <div class="col-lg-12" id="howTo">
                        <hr class="new5">

                            <div class="title" align="center">

                                <h3>How you can buy it</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div >
                                <span>
                                    01
                                </span>
                                <h3>Select item(s)</h3>
                                <p>Find the item(s) which you want to select</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div>
                                <span>
                                    02
                                </span>
                                <h3>Add to cart</h3>
                                <p>If you have item,Select it by add to cart.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div >
                                <span>
                                    03
                                </span>
                                <h3>Purchase it</h3>
                                <p>Check your item(s) which you select and purchase it by the methods.</p>
                            </div>
                        </div>
                    </div>
                </div>
</div>
 -->


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

    <!-- <script>
        function cart_add($itemid) {
            $.ajax({
                url: "/home/add/" + $itemid
            }).done(function (message) {
                console.log(message);
            })
        }
    </script> -->

