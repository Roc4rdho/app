@extends('layouts.frontend')

{{-- web site title --}}
@section('title')
@parent
First online money transfer and Payment agregator
@stop 
{{-- website content --}}
@section('content')
    <!-- header start -->
    <header id="home" class="navbar-fixed-top">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <h1><a class="nav-brand" href="">FAKOPAY</a></h1>
              </div>
            </div>
            <div class="col-sm-7">
              <!-- Collect the nav toggling -->
              <div class="collapse navbar-collapse navbar-example" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="#intro">Intro</a></li>
                  <li><a href="#feature">Feature</a></li>
                  <li><a href="#description">Description</a></li>
                  <li><a href="#screenshot">Screenshots</a></li>
                  <li><a href="#download">Download</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>             
              </div><!-- /.navbar-collapse -->
            </div>
            <div class="col-sm-2 mob-right">
              <ul class="app pull-right">
                <li><a href=""><i class="fa fa-apple"></i></a></li>
                <li><a href=""><i class="fa fa-android"></i></a></li>
                <li><a href=""><i class="fa fa-windows"></i></a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.container -->
      </nav>
    </header>
    <!-- header end -->
   
    <!-- banner start -->
    <section id="banner" class="banner-carousel">
      <div class="trans-bg">
        <div id="background-carousel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item item-no1 active"></div>
                <div class="item item-no2"></div>
                <div class="item item-no3"></div>
				<div class="item item-no4"></div>
              </div>
            </div>
        </div>
        <div class="content-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                  <h2><a href="" class="lg-logo">FAKOPAY</a></h2> <!-- .lg-logo -->
                  <h3 class="banner-title">Best online payment and money transfer agregator. Send and receive money instantly and securely over different networks</h3>                   
                  <ul class="app">
                    <li><a href=""><i class="fa fa-apple"></i></a></li>
                    <li><a href=""><i class="fa fa-android"></i></a></li>
                    <li><a href=""><i class="fa fa-windows"></i></a></li>
                  </ul>
                  <div class="download-block text-center">
                    <a href="{{URL::to('register')}}" class="btn-download">Signup</a><a href="{{URL::to('login')}}" class="btn-download">Login</a>
                  </div>                              
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.trans-bg -->       
    </section>
    <!-- banner end -->

    <!-- intro start -->
    <section id="intro" class="intro white">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <span class="sub-head wow fadeInLeft">FAKOPAY</span>
            <div class="title wow fadeInRight">
              <h2>At your service</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="app-block wow bounceInUp" data-wow-delay=".1s">
              <i class="fa fa-bolt"></i>
              <h3>Speed & Efficiency</h3>
              <p>We make sure your transactions are processed at lightening speed and most efficiently as humanoidly possible.</p>
            </div>            
          </div>
          <div class="col-sm-4">
            <div class="app-block wow bounceInUp" data-wow-delay=".2s">
              <i class="fa fa-life-ring"></i>
              <h3>real-time support</h3>
              <p>We are always available at your disposal so we can provide response times unmatched by any other service provider.</p>
            </div>            
          </div>
          <div class="col-sm-4">
            <div class="app-block wow bounceInUp" data-wow-delay=".3s">
              <i class="fa fa-paint-brush"></i>
              <h3>unique design</h3>
              <p>Our clean platform not only helps you navigate with ease, cormfort and security, but is built with the love we have for you.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="app-block wow bounceInUp" data-wow-delay=".4s">
              <i class="fa fa-angellist"></i>
              <h3>award winning</h3>
              <p>We have worked tirelessly to deliver the best which is proof of our 5 awards from the likes of E-Cam, ARA LAB, AEG.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="app-block wow bounceInUp" data-wow-delay=".5s">
              <i class="fa fa-thumbs-o-up"></i>
              <h3>best in qulality</h3>
              <p>When you try the others before us, you will testify to the difference in quality. Our superior quality is what we use to stand out.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="app-block wow bounceInUp" data-wow-delay=".6s">
              <i class="fa fa-puzzle-piece"></i>
              <h3>innovation</h3>
              <p>We are constantly evolving to bring you innovative ways of doing transactions. There's always a pending innovative approach inline. </p>
            </div>            
          </div>
        </div>
      </div>
    </section>
    <!-- intro end -->

    <!-- feature start -->
    <section id="feature" class="feature">
      <div class="trans-bg"> 
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="wow swing" data-wow-delay=".1s">packaged within</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <ul class="feature-list-left">
                <li>
                  <div class="feature-detail wow fadeInLeft" data-wow-delay=".4s">
                    <h4>Cross wallet transactions</h4>
                    <p>Send money to and from any major operator. Make transfers to mobile money via paypal and vice versa.</p>
                  </div>                          
                  <div class="feature-icon wow fadeInLeft" data-wow-delay=".3s">
                    <i class="fa fa-exchange"></i>
                  </div>
                </li>
                <li>
                  <div class="feature-detail wow fadeInLeft" data-wow-delay=".4s">
                    <h4>Loyalty</h4>
                    <p>Make more transactions and you'll notice a drop in the fees or applicable charges. We reward you with amazing gifts.</p>
                  </div>
                  <div class="feature-icon wow fadeInLeft" data-wow-delay=".3s">
                    <i class="fa fa-star-half-o"></i>
                  </div>                  
                </li>
                <li>
                  <div class="feature-detail wow fadeInLeft" data-wow-delay=".4s">
                    <h4>Transaction history</h4>
                    <p>We securely keep trace of every transaction. Refer to them to evaluate your operations on the platform.</p>
                  </div>
                  <div class="feature-icon wow fadeInLeft" data-wow-delay=".3s">
                    <i class="fa fa-arrows-alt"></i>
                  </div>                  
                </li>
              </ul>
            </div>
            <div class="col-sm-4 text-center">
              <img class="wow bounceInUp" src="public/assets/images/mobile.png" alt="" title="">
            </div>
            <div class="col-sm-4">
              <ul class="feature-list-right">
                <li>
                  <div class="feature-icon wow fadeInRight" data-wow-delay=".3s">
                    <i class="fa fa-cog"></i>
                  </div>
                  <div class="feature-detail wow fadeInRight" data-wow-delay=".4s">
                    <h4>Merchant Operations</h4>
                    <p>Every account is allowed to operate a merchant profile. Accept various methods of payments via a single API.</p>
                  </div>
                </li>
                <li>
                  <div class="feature-icon wow fadeInRight" data-wow-delay=".3s">
                    <i class="fa fa-mobile"></i>
                  </div>
                  <div class="feature-detail wow fadeInRight" data-wow-delay=".4s">
                    <h4>Mobile compatible</h4>
                    <p>Access the platform via mobile (Android, IOS) at your convinience. Download from the various app stores</p>
                  </div>
                </li>
                <li>
                  <div class="feature-icon wow fadeInRight" data-wow-delay=".3s">
                    <i class="fa fa-undo"></i>
                  </div>
                  <div class="feature-detail wow fadeInRight" data-wow-delay=".4s">
                    <h4>Payment request</h4>
                    <p>Request a payment from a third party via your account and get paid through your channel of choice.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- /.trans-bg -->
        
    </section>
    <!-- feature end -->

    <!-- description start -->
    <section id="description" class="description white">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <span class="sub-head wow fadeInLeft">think about</span>
            <div class="title wow fadeInRight">
              <h2>why FAKOPAY is best</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 wow pulse" data-wow-delay=".5s">
            <img class="img-responsive" src="public/assets/images/sendmoney.jpg" alt="Why to choose us">
          </div>
          <div class="col-sm-6">
            <ul class="description-list">
			  <li class="wow fadeInRight"><span class="des-icon"><i class="fa fa-money"></i></span>Unbeatable transaction fees yet</li>
              <li class="wow fadeInRight"><span class="des-icon"><i class="fa fa-globe"></i></span>Made for the world by Africans.</li>
              <li class="wow fadeInRight"><span class="des-icon"><i class="fa fa-paw"></i></span>Addresses the need directly and easily</li>
              <li class="wow fadeInRight"><span class="des-icon"><i class="fa fa-lock"></i></span>Rapid and secure operations</li>
              <li class="wow fadeInRight"><span class="des-icon"><i class="fa fa-file-archive-o"></i></span>Accountability and traceability</li>
              <li class="wow fadeInRight"><span class="des-icon"><i class="fa fa-magic"></i></span>Unique design and experience</li>
              <li class="wow fadeInRight"><span class="des-icon"><i class="fa fa-rebel"></i></span>Complexity in ultimate simplicity</li>
			  <li class="wow fadeInRight"><span class="des-icon"><i class="fa fa-users"></i></span>1000+ loyal customers in 3 continents and counting</li>
            </ul>
            <!-- /.description-list -->
          </div>
        </div>
      </div>
    </section>
    <!-- description end-->

    <!-- video start -->
    <section id="video" class="video">
      <div id="trans-bg" class="trans-bg">
      	<div class="video-container"><div id="player"></div><div class="video-mask"></div></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="video-mask">
                <h2 class="wow bounceInDown">how it works</h2>
					<a href="https://vimeo.com/45830194" class="play wow rollIn animated"></a>
                <span class="wow bounceInUp">watch video</span>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.trans-bg -->    
    </section>
    <!-- video end -->

    <!-- screenshot start -->
    <section id="screenshot" class="screenshot white">
      <div class="container">
      </div>
    </section>
    <!-- screenshot end -->

    <!-- review start -->
    <section id="review" class="review">
      <div class="trans-bg"> 
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="wow swing">reviews</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="active item">
                    <span class="review-img">
                       <img src="./public/assets/images/reviews/derick.jpg" alt="image" height="150" width="150" class="img img-circle">
                     </span>
                    <p>I use my mobile money wallet to receive money via paypal in Cameroon. Couldn't be more useful and i felt wonderfully releived of a task impossible to do before.</p>
                    <span class="reviewer-name">Alangi Derick</span>
                    <span class="review-comp">Cameroon</span>
                  </div>
                  <div class="item">
                    <span class="review-img">
                       <img src="./public/assets/images/reviews/payet.jpg" alt="image" height="150" width="150" class="img img-circle">
                     </span>
                    <p>There has never been a more universal way to pay for my online shopping. Now i can use any wallet of my choice and at my disposal to quickly and securely pay.</p>
                    <span class="reviewer-name">Annie Payet</span>
                    <span class="review-comp">USA</span>
                  </div>
                  <div class="item">
                    <span class="review-img">
                       <img src="./public/assets/images/reviews/jaolin.jpg" alt="image" height="150" width="150" class="img img-circle">
                     </span>
                    <p>I received my freelance payment quite rapidly and conviniently. It's simple, practical and works well even in such places like ours. I think  it's nice work.</p>
                    <span class="reviewer-name">Jao Lins</span>
                    <span class="review-comp">China</span>
                  </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel1" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="carousel-control right" href="#myCarousel1" data-slide="next"><i class="fa fa-angle-right"></i></a>              
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.trans-bg -->
      
    </section>
    <!-- review end -->
	
	<section id="screenshot" class="screenshot white">
      <div class="container">
      </div>
    </section>
	
    <!-- download start -->
    <section id="download" class="downlaod">
      <div class="trans-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="wow swing">download</h2>
              <p>You wish to go mobile? We got something for you on our app stores.</p>
              <span class="wow fadeInLeft" style="display:inline-block"><a href="" class="btn"><i class="fa fa-apple"></i> app store</a></span>
              <span class="wow fadeInLeft" style="display:inline-block"><a href="" class="btn"><i class="fa fa-android"></i> play store</a></span>
              <span class="wow fadeInLeft" style="display:inline-block"><a href="" class="btn"><i class="fa fa-windows"></i> windows</a></span>
            </div>
          </div>
        </div>
      </div> <!-- /.trans-bg -->  
    </section>
    <!-- download end -->

    <!-- support start -->
    <section id="support" class="support white">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <span class="sub-head wow fadeInLeft">stay close</span>
            <div class="title wow fadeInRight">
              <h2>help & support</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 wow bounceInUp" data-wow-duration="1s">
            <div class="support-block">
              <span class="support-icon"><i class="fa fa-bitbucket"></i></span>
              <h3>Community Support</h3>
              <p>Soome folks may have a solution to your problem already. Engage with them and get sorted out.</p>
			  <a href="#!" title="Community" class="btn btn-sub">More FAQ</a>
            </div>
          </div>
         
          <div class="col-sm-6 wow bounceInUp" data-wow-duration="3s">
            <div class="support-block">
              <span class="support-icon"><i class="fa fa-stethoscope"></i></span>
              <h3>Dedicated Support</h3>
              <p>Join us in real-time and we can assist you all the way. We are available 24/7</p>
			  <a href="#!" title="dedicated support" class="btn btn-sub">Start</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- support end --> 

    <!-- subscription start -->
    <section id="subscription" class="subscription"> 
      <div class="trans-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center">
              <h2 class="wow swing">newsletter sign up</h2>
				<form class="newsletter-signup">
				  <p class="newsletter-success"></p>
				  <p class="newsletter-error"></p>
					<div class="input-group">              
					   <input type="email" name="email" placeholder="Enter Your Email Address" class="form-control wow fadeInLeft">
					  <span class="input-group-btn wow fadeInRight">
						<input type="submit" value="subscribe" class="btn btn-sub">
					  </span>                            
					</div><!-- /.input-group -->
               </form>
            </div>
          </div>
        </div>
      </div> <!-- /.trans-bg -->
    </section>
    <!-- subscription end -->

    <!-- contact start -->
    <section id="contact" class="contact white tab-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs text-center" role="tablist">
              <li class="wow rollIn animated" data-wow-duration="1s"><a href="#contact-info" role="tab" data-toggle="tab"><i class="fa fa-paper-plane"></i>
                </a></li>
              <li class="active wow rollIn animated" data-wow-duration="2s"><a href="#contact-form" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i></a></li>
              <li class="wow rollIn animated" data-wow-duration="3s"><a href="#contact-map" class="contact-map" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i></a></li>
            </ul>            
          </div>
        </div>
      </div>
       <!-- Tab panes -->            
      <div class="tab-content">
        <div class="tab-pane contact-info" id="contact-info">
          <div class="container">
            <div class="row">
            <div class="col-sm-12 text-center">            
              <span class="sub-head">we are here</span>
              <div class="title">
                <h2>get in touch</h2>
              </div>
            </div>
          </div>
            <div class="row text-center">
              <div class="col-sm-4">
                <div class="info-holder">
                  <i class="fa fa-taxi"></i>
                   <br>
                   <p>
                     14/4 <br>
                     Sokolo new Road <br>
                     Limbe, Cameroon 
                   </p>
                </div>                
              </div>
              <div class="col-sm-4">
                <div class="info-holder">
                  <i class="fa fa-mobile"></i>
                  <br>
                  <p>+237-678-656-032
                  <br>
                  +237-6xx-xxx-xxx
                  <br>
                  </p>
                </div>                
              </div>
              <div class="col-sm-4">
                <div class="info-holder">
                  <i class="fa fa-reply"></i>
                  <br>
                  <p>
                    service@fakopay.com
                    <br>
                    info@fakopay.com
                  </p>
                </div>                
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane active contact-info" id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">            
                <span class="sub-head">we are here</span>
                <div class="title">
                  <h2>get in touch</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <form class="form-horizontal" role="form">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="span-form">
                        <input class="form-control" type="text" placeholder="First name" required="required">
                      </div>
                      <div class="span-form">
                        <input type="text" class="form-control" placeholder="Last name" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email address" required="required">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <textarea name="" class="form-control btn-block" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-block" value="send message">
                    </div>
                  </div>
                  <div class="col-sm-12">
					<p class="contact-success">Your Message has been Successfully Sent!</p>
					<p class="contact-error">Error! Something went wrong!</p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane contact-info" id="contact-map">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">            
                <span class="sub-head">we are here</span>
                <div class="title">
                  <h2>get in touch</h2>
                </div>
              </div>
            </div>
          </div>
          <div id="map">
            
          </div>
        </div>
      </div>  
    </section>
    <!-- contact end -->

    <!-- footer start -->
    <footer id="footer">
      <div class="trans-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="social-icon">
               <a href="" class="wow rollIn animated" data-wow-delay=".1s"><i class="fa fa-facebook"></i></a>
               <a href="" class="wow rollIn animated" data-wow-delay=".2s"><i class="fa fa-twitter"></i></a>
               <a href="" class="wow rollIn animated" data-wow-delay=".3s"><i class="fa fa-google-plus"></i></a>
               <a href="" class="wow rollIn animated" data-wow-delay=".8s"><i class="fa fa-youtube-square"></i></a>
              </div>
              <div class="copyright">
                <p>&copy; <span>FAKOPAY</span>2016, all right reserved. <a href="#!" style="color:#ccc">Privacy</a> | <a href="" style="color:#ccc">Terms &AMP; Conditions</a></p>
                </div>
            </div>
          </div>
        </div>
        <div id="go-to-top">
            <a href="#banner"></a>
        </div>
        <!--/.go-to-top end-->
      </div> <!-- /.trans-bg -->
    </footer>
    <!-- footer end -->   
    @stop