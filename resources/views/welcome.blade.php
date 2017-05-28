<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <meta content="telephone=no" name="format-detection">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/override.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="50">
  <div class="load"></div>
<section id="welcome">
    <header class="navbar navbar-default navbar-fixed-top">
        
            <div class="navbar-header col-md-3 col-sm-3">
                <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p><a class="navbar-brand" href="#"><img src="LOGO.png" alt="logo" title="AOE Marketing"></a></p>
            </div>
            <div class="collapse navbar-collapse col-md-9 col-sm-9" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#cases">Cases</a>
                    </li>
                    <li>
                        <a href="#starting">How to start</a>
                    </li>
                    
                    <li>
                        <a href="#price">Prices</a>
                    </li>
                    <li>
                        <a href="#contacts">Contacts</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="container">
        <nav class="links">
            <a href="/login" style="margin-right: 15px;">
                <button>
                    Login
                </button>
            </a>

            <a href="/register">
                <button>
                    Register
                </button>
            </a>
        </nav>
    </header>
    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <small>Time tested proven theories integrated with new age innovative techniques</small>
                  <h1>Increasing your brand through publc relations</h1>
                </div>
                <div class="col-md-3 col-md-offset-3 col-sm-6">
                    <a href="#" class="intro-button">Presentation</a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="intro-button">Order</a>
                </div>
                <div class="clearfix"></div>
                <div id="carousel-review" class="carousel slide" data-ride="carousel" data-interval="9999999">
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-review" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-review" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">        
                    <div class="col-md-5 col-md-offset-1 col-sm-6 item active">
                        <div class="review">
                            <div class="review-user">
                                <img src="http://placehold.it/70x70/" alt="Michael Mind" title="Michael Mind" />
                            </div>
                            <div class="review-meta">
                                <p>Michael Mind<span>26/03/16</span></p>
                            </div>
                            <div class="review-text">
                              <p>Many thanks to the team for the comprehensive promotion of my goods, that is very difficult to sell. During ...</p>
                              <div class="review-link">
                                    <img src="img/users/links/vk.png" alt="VKontakte" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 item">
                        <div class="review">
                            <div class="review-user">
                                <img src="http://placehold.it/70x70/" alt="Alice Wonder" title="Alice Wonder" />
                            </div>
                            <div class="review-meta">
                                <p>Alice Wonder<span>05/02/16</span></p>
                            </div>
                            <div class="review-text">
                              <p>I did not regret chosing this company. We faced a challenge that could not perform many other companies but ...</p>
                              <div class="review-link">
                                    <img src="img/users/links/tw.png" alt="Twitter" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Paste the following review here instead comment-->
                </div>
                <a class="left carousel-control visible-xs" href="#carousel-review" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control visible-xs" href="#carousel-review" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
                <medium class="title dark">Events, Social networks and blogs</medium>
                <h2>Our services</h2>
We strive  to provide our clients with true audience engagement . &nbsp;Our services help our clients find the right audience and demographics. We look to make honest long term connections that builds your fanbase.</div>
            <div id="carousel-service" class="carousel slide" data-ride="carousel" data-interval="9999999">
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-service" data-slide-to="1"></li>
                    <li data-target="#carousel-service" data-slide-to="2"></li>
                    <li data-target="#carousel-service" data-slide-to="3"></li>
                    <li data-target="#carousel-service" data-slide-to="4"></li>
                    <li data-target="#carousel-service" data-slide-to="5"></li>
                </ol>
        
                    <!-- Paste the following service instead this comment. And do not forget to create a modal window for this service (if necessary)-->
                </div>
                <!-- Modal window-->
                <!--Modal for VK Service-->
                <div class="modal fade" id="service_vk" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip">
                                    <span aria-hidden="true">&times;</span>
                                </button> 
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <img src="img/services/vk.png" alt="VK" title="VK" />
                                        <h4 class="modal-title">Advertising in Vkontakte</h4>
                                        <p>Probably, this social network is known in the CIS, even those who have Internet access and some can not use. No joke, every day vk.com site is visited by over 70 million people! And the vast majority of them - the Russian language.</p>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Provided services</h5>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1">
                                        <ul class="list">
                                            <li>Design group</li>
                                            <li>Management group</li>
                                            <li>Live subscribers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list">
                                            <li>Attracting participants</li>
                                            <li>Drawing contests</li>
                                            <li>Communication with customers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Book your service now</h5>
                                    </div>
                                    <form action="php/post.php?action=service&service=vk" method="POST" data-source="modal">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="alert alert-danger validate-message alert-dismissible"></div>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="form-field">
                                                <input type="text" name="name" placeholder="Your name" />
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-field">
                                                <input type="text" name="email" placeholder="Your e-mail" />
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-md-offset-1">
                                            <a href="#" class="button large request">Order of service</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal for Facebook Service-->
                <div class="modal fade" id="service_fb" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <img src="img/services/fb.png" alt="Facebook" title="Facebook" />
                                        <h4 class="modal-title">Advertising in Facebook</h4>
                                        <p>Probably, this social network is known in the CIS, even those who have Internet access and some can not use. No joke, every day facebook.com site is visited by over 70 million people! And the vast majority of them - the Russian language.</p>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Provided services</h5>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1">
                                        <ul class="list">
                                            <li>Design group</li>
                                            <li>Management group</li>
                                            <li>Live subscribers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list">
                                            <li>Attracting participants</li>
                                            <li>Drawing contests</li>
                                            <li>Communication with customers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Book your service now</h5>
                                    </div>
                                    <form action="php/post.php?action=service&service=fb" method="POST" data-source="modal">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="alert alert-danger validate-message alert-dismissible"></div>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="form-field">
                                                <input type="text" name="name" placeholder="Your name" />
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-field">
                                                <input type="text" name="email" placeholder="Your e-mail" />
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-md-offset-1">
                                            <a href="#" class="button large request">Order of service</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal for Instagram Service -->             
                <div class="modal fade" id="service_it" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <img src="img/services/it.png" alt="Instagram" title="Instagram" />
                                        <h4 class="modal-title">Advertising in Instagram</h4>
                                        <p>Probably, this social network is known in the CIS, even those who have Internet access and some can not use. No joke, every day instagram.com site is visited by over 70 million people! And the vast majority of them - the Russian language.</p>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Provided services</h5>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1">
                                        <ul class="list">
                                            <li>Design group</li>
                                            <li>Management group</li>
                                            <li>Live subscribers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list">
                                            <li>Attracting participants</li>
                                            <li>Drawing contests</li>
                                            <li>Communication with customers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Book your service now</h5>
                                    </div>
                                    <form action="php/post.php?action=service&service=it" method="POST"  data-source="modal">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="alert alert-danger validate-message alert-dismissible"></div>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="form-field">
                                                <input type="text" name="name" placeholder="Your name" />
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-field">
                                                <input type="text" name="email" placeholder="Your e-mail" />
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-md-offset-1">
                                            <a href="#" class="button large request">Order of service</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal for Twitter Service -->
                <div class="modal fade" id="service_tw" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <img src="img/services/tw.png" alt="Twitter" title="Twitter" />
                                        <h4 class="modal-title">Advertising in Twitter</h4>
                                        <p>Probably, this social network is known in the CIS, even those who have Internet access and some can not use. No joke, every day twitter.com site is visited by over 70 million people! And the vast majority of them - the Russian language.</p>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Provided services</h5>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1">
                                        <ul class="list">
                                            <li>Design group</li>
                                            <li>Management group</li>
                                            <li>Live subscribers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list">
                                            <li>Attracting participants</li>
                                            <li>Drawing contests</li>
                                            <li>Communication with customers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Book your service now</h5>
                                    </div>
                                    <form action="php/post.php?action=service&service=tw" method="POST" data-source="modal">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="alert alert-danger validate-message alert-dismissible"></div>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="form-field">
                                                <input type="text" name="name" placeholder="Your name" />
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-field">
                                                <input type="text" name="email" placeholder="Your e-mail" />
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-md-offset-1">
                                            <a href="#" class="button large request">Order of service</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal for Odnoklassniki Service -->
                <div class="modal fade" id="service_ok" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <img src="img/services/ok.png" alt="OK" title="OK" />
                                        <h4 class="modal-title">Advertising in Odnoklassniki</h4>
                                        <p>Probably, this social network is known in the CIS, even those who have Internet access and some can not use. No joke, every day ok.ru site is visited by over 70 million people! And the vast majority of them - the Russian language.</p>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Provided services</h5>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1">
                                        <ul class="list">
                                            <li>Design group</li>
                                            <li>Management group</li>
                                            <li>Live subscribers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list">
                                            <li>Attracting participants</li>
                                            <li>Drawing contests</li>
                                            <li>Communication with customers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Book your service now</h5>
                                    </div>
                                    <form action="php/post.php?action=service&service=ok" method="POST" data-source="modal">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="alert alert-danger validate-message alert-dismissible"></div>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="form-field">
                                                <input type="text" name="name" placeholder="Your name" />
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-field">
                                                <input type="text" name="email" placeholder="Your e-mail" />
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-md-offset-1">
                                            <a href="#" class="button large request">Order of service</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal for Youtube Service -->
                <div class="modal fade" id="service_yt" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <img src="img/services/yt.png" alt="Youtube" title="Youtube" />
                                        <h4 class="modal-title">Advertising in Youtube</h4>
                                        <p>Probably, this social network is known in the CIS, even those who have Internet access and some can not use. No joke, every day youtube.com site is visited by over 70 million people! And the vast majority of them - the Russian language.</p>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Provided services</h5>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1">
                                        <ul class="list">
                                            <li>Design group</li>
                                            <li>Management group</li>
                                            <li>Live subscribers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list">
                                            <li>Attracting participants</li>
                                            <li>Drawing contests</li>
                                            <li>Communication with customers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <h5>Book your service now</h5>
                                    </div>
                                    <form action="php/post.php?action=service&service=yt" method="POST" data-source="modal">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="alert alert-danger validate-message alert-dismissible"></div>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="form-field">
                                                <input type="text" name="name" placeholder="Your name" />
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-field">
                                                <input type="text" name="email" placeholder="Your e-mail" />
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-md-offset-1">
                                            <a href="#" class="button large request">Order of service</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Paste modal window for your next service instead  this comment-->
                <a class="left carousel-control visible-xs" href="#carousel-service" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control visible-xs" href="#carousel-service" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <small class="title dark">Complex work</small>
                <h2>We offer</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="work">
                    <img src="img/works/w1.png" alt="Keeping communities" title="Keeping communities" />
                    <h3>Keeping communities</h3>
                    <p>We put your brand in the right places at the rignt time.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="work">
                    <img src="img/works/w2.png" alt="Targeting" title="Targeting" />
                    <h3>Targeting</h3>
                    <p>Its important to know who you should be talking to and why.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="work">
                    <img src="img/works/w3.png" alt="Contests and Promotions" title="Contests and Promotions" />
                    <h3>Contests and Promotions</h3>
                    <p>FInd out what your fans, customers and those that count will respond to.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="work">
                    <img src="img/works/w4.png" alt="Advertising community" title="Advertising community" />
                    <h3>Advertising community</h3>
                    <p>We know how &nbsp;to get your message out there.</p>
                </div>
            </div>
            <!-- Paste your next work instead this comment-->

        </div>
    </div>
</section>
<section id="directions">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <small class="title light">Work on the result</small>
                <h2>Main directions</h2>
            </div>
            <div class="direction">
                <div class="col-md-4 col-sm-6">
                    <img src="img/directions/d1.png" class="img-responsive" alt="Analysis and research" title="Analysis and research" />
                </div>
                <div class="col-md-8 col-sm-6">
                    <h3>Analysis and research</h3>
                    <p>With thousands of man hours and years of proven research, we find your targets hot button and get them to respond. &nbsp;Our technology and techniques helps build a loyal fan and customer base.  Our market research shows the best way to find the right people at the right time.</p>
                </div>
            </div>
            <div class="direction middle hidden-xs">
                <div class="col-md-8 col-sm-6">
                    <h3>Support and promotion</h3>
                    <p>Our team stays abreast of trends and administrative and technical requirements between the various social media platforms. &nbsp;With our strategic partners we find the best way to &nbsp;promote your brand inline with your marketing objectives. </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="img/directions/d2.png" class="img-responsive" alt="Support and promotion" title="Support and promotion" />
                </div>
            </div>
            <div class="direction visible-xs">
                <div class="col-md-4 col-sm-6">
                    <img src="img/directions/d2.png" class="img-responsive" alt="Support and promotion" title="Support and promotion" />
                </div>
                <div class="col-md-8 col-sm-6">
                    <h3>Support and promotion</h3>
                    <p>The significance of these problems are so obvious that continuous information and propaganda support of our activity plays an important role in shaping the direction of progressive development.</p>
                </div>
            </div>
            <div class="direction no-br">
                <div class="col-md-4 col-sm-6">
                    <img src="img/directions/d3.png" class="img-responsive" alt="Creative and design" title="Creative and design" />
                </div>
                <div class="col-md-8 col-sm-6">
                    <h3>Creative and design</h3>
                    <p>In cases where there is a need for creative input, we have a staff with over 20 years in marketing material creation. &nbsp;With a full scale campaign we plan and budget according to need and scope.</p>
                </div>
            </div>
            <!-- Paste your next direction instead this comment-->
        </div>
    </div>
</section>
<section id="cases">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <small class="title dark">More than 20000 successful cases</small>
                <h2>Most recent customer results</h2>
            </div>
            <div id="carousel-case" class="carousel slide" data-ride="carousel" data-interval="9999999">
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-case" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-case" data-slide-to="1"></li>
                    <li data-target="#carousel-case" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="col-md-4 col-sm-4 item active">
                        <div class="case"><!--case 1:start-->
                            <div class="case-image">
                                <img src="jediva.jpg" alt="Case 1" title="Case 1" />
                            </div>
                            <div class="case-network">
                                <img src="img/services/it.png" alt="VK" title="VK" />
                            </div>
                            <h3>Fashion Magazine</h3>
                            <div class="case-link">
                                <a href="https://www.instagram.com/jedivamagazine">instagram.com/jedivamagazine</a>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="before">
                                        <h4>Before</h4>
                                        <div class="digits">170</div>
                                        <div class="labels">subscribers</div>
                                        <div class="digits">15</div>
                                        <div class="labels">orders / month.</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="after">
                                        <h4>After</h4>
                                        <div class="digits">11 700</div>
                                        <div class="labels">subscribers</div>
                                        <div class="digits">1293</div>
                                        <div class="labels">orders / month.</div>
                                    </div>
                                </div>
                            </div>
                        </div><!--case 1:end-->
                    </div>
                    <div class="col-md-4 col-sm-4 item">
                        <div class="case"><!--case 2:start-->
                            <div class="case-image">
                                <img src="pamper.jpg" alt="Case 2" title="Case 2" />
                            </div>
                            <div class="case-network">
                                <img src="img/services/it.png" alt="Instagram" title="Instagram" />
                            </div>
                            <h3>Cosmetics</h3>
                            <div class="case-link">
                                <a href="https://www.instagram.com/officialpampermecosmetics">instagram/officialpampermecosmetics</a>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="before">
                                        <h4>Before</h4>
                                        <div class="digits">0</div>
                                        <div class="labels">subscribers</div>
                                        <div class="digits">0</div>
                                        <div class="labels">orders / month.</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="after">
                                        <h4>After</h4>
                                        <div class="digits">4 700</div>
                                        <div class="labels">subscribers</div>
                                        <div class="digits">93</div>
                                        <div class="labels">orders / month.</div>
                                    </div>
                                </div>
                            </div>
                        </div><!--case 2:end-->
                    </div>
                    <div class="col-md-4 col-sm-4 item">
                        <div class="case"><!--case 3:start-->
                            <div class="case-image">
                                <img src="model.jpg" alt="Case 3" title="Case 3" />
                            </div>
                            <div class="case-network">
                                <img src="img/services/it.png" alt="OK" title="OK" />
                            </div>
                            <h3>Fashion Models</h3>
                            <div class="case-link">
                                <a href="https://www.instagram.com/xokathrine">instagram/xokathrine</a>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="before">
                                        <h4>Before</h4>
                                        <div class="digits">520</div>
                                        <div class="labels">subscribers</div>
                                        <div class="digits">5</div>
                                        <div class="labels">assignments / month.</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="after">
                                        <h4>After</h4>
                                        <div class="digits">15 700</div>
                                        <div class="labels">subscribers</div>
                                        <div class="digits">53</div>
                                        <div class="labels">assignments / month.</div>
                                    </div>
                                </div>
                            </div>
                        </div><!--case 3:end-->
                    </div>
                    <!-- Paste your next cease instead this comment-->
                </div>
                <a class="left carousel-control visible-xs" href="#carousel-case" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control visible-xs" href="#carousel-case" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="starting">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <small class="title dark">We can help you find out</small>
                <h2>Getting starting</h2>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="stage">
                    <div class="bage">1</div>
                    <img src="img/stages/s1.png" alt="Stage1" title="Stage 1" />
                    <p>Fill out the form and within 15 minutes of your call manager</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="stage">
                    <div class="bage">2</div>
                    <img src="img/stages/s2.png" alt="Stage2" title="Stage 2" />
                    <p>Define the problem and choose the promotion strategy</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="stage">
                    <div class="bage">3</div>
                    <img src="img/stages/s3.png" alt="Stage3" title="Stage 3" />
                    <p>Sign the contract and pay the selected services</p>
                </div>
            </div>
            <!-- Paste your next stage instead this comment-->
            <div class="col-md-12">
                <div class="stage">
                    <a href="#" class="button large" data-toggle="modal" data-target="#call_back" data-keyboard="true"><i class="fa fa-send"></i>Submit your application</a>
                </div>
            </div>
            <div id="call_back" class="modal fade in" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <h4 class="modal-title">Call back</h4>
                                    <h5>Send your request and we ourselves will call you back!</h5>
                                </div>
                                <form action="php/post.php?action=callback" method="POST" data-source="modal">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="alert alert-danger validate-message alert-dismissible"></div>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="form-field">
                                            <input type="text" name="name" placeholder="Your name" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-field">
                                            <input type="text" name="phone" placeholder="Your e-mail" />
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <a href="#" class="button large request">Send request</a>
                                    </div>
                                    <input type="hidden" name="plan" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="price">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <small class="title light">We choose a plan of action</small>
                <h2>Choose the right plan</h2>
            </div>
            <div id="carousel-price" class="carousel slide" data-ride="carousel" data-interval="9999999">
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-price" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-price" data-slide-to="1"></li>
                    <li data-target="#carousel-price" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="col-md-4 col-sm-4 item active">
                        <div class="complex">
                            <small>Basic</small>
                          <h3>$500/mo</h3>
                            <ul class="nav">
                              <li>social media marketing</li>
                              <li>social media marketing</li>
                              
                              
</ul>
</div>
                    </div>
                    <div class="col-md-4 col-sm-4 item">
                        <div class="complex"><small>Executive</small><br>
                          <h3>Quoted package</h3>
                          <ul class="nav">
                            <li>social media marketing</li>
                            <li>publicity/press work</li>
                            <li>Marketing media design</li>
                            <li>street/publicity team</li>
                            <li>Targeted traffic</li>
                          </ul>
                            
                            <div class="ribbon">
                                <h4>Recomended</h4>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 item">
                        <div class="complex">
                            <small>Professional</small>
                          <h3>Quoted package</h3>
                            <ul class="nav">
                              <li>social media maketing</li>
                              <li>publicity/press work</li>
                              <li>Marketing media design</li>
                              <li>street/publicity team</li>
                              <li>Targeted traffic</li>
                                <li>Group / site design</li>
                                <li>Communication w/customers</li>
                            </ul>
                            
                        </div>
                    </div>
                    <!-- Paste your next tariff plan instead this comment-->
                </div>
                <a class="left carousel-control visible-xs" href="#carousel-price" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control visible-xs" href="#carousel-price" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
            <div class="col-md-12">
                <h1>Do not waste your time, start to attract<br> customers today.</h1>
                <span>We'll help you bring it to the maximum result.</span>
            </div>
            <div id="order_plans" class="modal fade in" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <h4 class="modal-title">Application</h4>
                                    <h5>for a plan <span></span></h5>
                                </div>
                                <form action="php/post.php?action=order" method="POST" data-source="modal">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="alert alert-danger validate-message alert-dismissible"></div>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="form-field">
                                            <input type="text" name="name" placeholder="Your name" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-field">
                                            <input type="text" name="email" placeholder="Your e-mail" />
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <a href="#" class="button large request">Send request</a>
                                    </div>
                                    <input type="hidden" name="plan" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contacts">
    <div class="container">
        <div class="row">
            <small class="title dark">Leave a request right now</small>
            <h2>Feedback</h2>
            <form action="php/post.php?action=feedback" method="POST">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-danger validate-message alert-dismissible"></div>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-6">
                    <div class="form-field">
                        <input type="text" name="name" placeholder="Your name" required />
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-field">
                        <input type="text" name="email" placeholder="Your e-mail" required />
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-field">
                        <textarea name="message" placeholder="Your message" required></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="#" class="button large request"><i class="fa fa-send"></i>Submit</a>
                </div>
            </form>
<div class="col-md-4 col-md-offset-1 col-sm-4">
          <span class="address"></span>
          <h3>Address</h3>
                <p>2 Ravania Pkwy ,Atlanta,Ga 30346&nbsp;</p>
            </div>
            <div class="col-md-2 col-md-offset-1 col-sm-4">
                <span class="mail"></span>
                <h3>Mail</h3>
                <p>PR@aoemarketing.com</p>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">&copy; AOE Marketing. All rights reserved</div>
            <div class="col-md-6">
                <div class="social">
                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Youtube">
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Vkontakte">
                        <i class="fa fa-vk"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.swipe.min.js"></script>
<script src="js/custom.js"></script>
    </div>
</body>
</html>
