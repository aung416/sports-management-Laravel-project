<!DOCTYPE html>
<html lang="en">

<head>
  <title>BSFMSTU Sports Event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">

          <!-- logo -->
          <div class="site-logo">
            <a href="">
              <img src="images/Logo-Final-1.png" alt="Logo" width="100px" height="100px" style="border-radius:50px; float:left ">
            </a>
          </div>
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          <a style="color:white; padding-left:2%;"  aria-current="page" href=""><button type="button" class="btn btn-primary py-2 px-4 mr-3">HOME</button></a>
            <a style="color:white;padding-left:0%"  aria-current="page" href="#"><button type="button" class="btn btn-primary py-2 px-4 mr-3">SCORE</button></a>
            <a style="color:white;padding-left:0%"  aria-current="page" href="#"><button type="button" class="btn btn-primary py-2 px-4 mr-3">TV</button></a>
            <a style="color:white;padding-left:0%"  aria-current="page" href="#"><button type="button" class="btn btn-primary py-2 px-4 mr-3">VIDEOS</button></a>
            <a style="color:white;padding-left:0%" href="#" role="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <button type="button" class="btn btn-primary py-2 px-4 mr-3">SPORTS</button>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a style="color:white" class="nav-link active" aria-current="page" href="{{url('/Football')}}"><button type="button" class="btn btn-primary py-2 px-4 mr-3">FOOTBALL</button></a>
              <a style="color:white" class="nav-link active" aria-current="page" href="{{url('/cricket')}}"><button type="button" class="btn btn-primary py-2 px-4 mr-3">CRICKET</button></a>
              <a style="color:white" class="nav-link active" aria-current="page" href="{{url('/carrom')}}"><button type="button" class="btn btn-primary py-2 px-4 mr-3">CARROM</button></a>
              <a style="color:white" class="nav-link active" aria-current="page" href="{{url('/volleyball')}}"><button type="button" class="btn btn-primary py-2 px-4 mr-3">VOLLEYBALL</button></a>
            </div>
            <a style="color:white;padding-left:0%"  aria-current="page" href="{{url('/about')}}"><button type="button" class="btn btn-primary py-2 px-4 mr-3">ABOUT</button></a>
            <!-- @if (Route::has('login'))
            @auth
            <a  href="{{ url('/dashboard') }}" class="text-sm text-yellow-700 dark:text-yellow-500 underline">Dashboard</a>
        @else
            <a  style="color: white; padding-left:10%" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-primary-500 underline"> <button type="button" class="btn btn-primary py-2 px-4 mr-3">LOG IN</button></a>
            @if (Route::has('register'))
                            <a style="color: white" href="{{ route('register') }}" class="ml-4 text-sm text-yellow-700 dark:text-yellow-500 underline"><button type="button" class="btn btn-primary py-2 px-4 mr-3">REGISTER</button></a>
                        @endif
            @endauth
        @endif -->
          </div>
          
          <div >
           
          </div>
     
    </header>

    <div class="hero overlay" style="background-image: url('images/backgroundpicture.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto">
            <h1 class="text-white">BSFMSTU Sports Event 2023</h1>
            <p></p>
            <div id="date-countdown"></div>
            <p>

          <a style="color: white" href="{{url('/registration/event')}}" class="btn btn-primary py-3 px-4 mr-3">Register</a>

              <a href="#" class="more light">Learn More</a>
            </p>  
          </div>
        </div>
      </div>
    </div>
    @foreach($addScore as $key=>$data)
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex team-vs">
            <h3 style="text-align:center">Today's Match</h3>
          <span class="score">{{$data-> football_score}}</span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_1.png" alt="Image" class="img-fluid">
                <h3> {{$data-> team_name1}}</h3>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_2.png" alt="Image" class="img-fluid">
                <h3>{{$data-> team_name2}}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach 
    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Latest News</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="images/cse.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3"></h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                     
                    </div>
                    <div class="text">
                      <h4></h4>
                      <span> &bullet; Sports</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="images/cse.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3"></h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                     
                    </div>
                    <div class="text">
                      <h4></h4>
                      <span> &bullet; Sports</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="images/cse.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3"></h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                     
                    </div>
                    <div class="text">
                      <h4></h4>
                      <span> &bullet;Sports</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>

      </div>
    </div>
    
   

    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Next Match</h3>
              </div>
              @foreach($addMatch as $key=>$data) 
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                  <div class="team-1 text-center">
                      <img src="images/logo_1.png" alt="Image">
                      <!-- <h3>Team1</h3> -->
                       <h3>{{$data-> team_name1}}</h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                      <img src="images/logo_2.png" alt="Image">
                      <!-- <h3>Team2</h3> -->
                      <h3>{{$data-> team_name2}}</h3>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach 
               
              <div class="text-center widget-vs-contents mb-4">
                <h4>BSFMSTU League</h4>
                <p class="mb-5">
                  <span class="d-block">March 16th, 2023</span>
                  <span class="d-block">2:30 AM GMT+0</span>
                  <strong class="text-primary">Bangabondhu Inter-University Cup</strong>
                </p>

                <div id="date-countdown2" class="pb-1"></div>
              </div>
        
            </div>
          </div>
          <div class="col-lg-6">
            
            <div class="widget-next-match">
              <table class="table custom-table">
                <thead>
                  <tr>
                    <th>P</th>
                    <th>Team</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>PTS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><strong class="text-white">Team1</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><strong class="text-white">Team2</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><strong class="text-white">Team3</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><strong class="text-white">Team4</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><strong class="text-white">Team5</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><strong class="text-white"> Team6</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  
                  
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div> <!-- .site-section -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">Videos</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div class="owl-4-slider owl-carousel">
          <div class="item">
            <div class="video-media">
            <video width="320" height="240" controls>
               <source src="videos/video1.mp4" type="video/mp4">
                </video>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
            <video width="320" height="240" controls>
               <source src="videos/video2.mp4" type="video/mp4">
                </video>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
            <video width="320" height="240" controls>
               <source src="videos/video3.mp4" type="video/mp4">
                </video>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="video-media">
            <video width="320" height="240" controls>
               <source src="videos/video4.mp4" type="video/mp4">
                </video>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
            <video width="320" height="240" controls>
               <source src="videos/video5.mp4" type="video/mp4">
                </video>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
            <video width="320" height="240" controls>
               <source src="videos/video7.mp4" type="video/mp4">
                </video>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Our Blog</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/meherab.jpeg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Mehrab</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/ong.JPG" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Ongsaiu Marma</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>News</h3>
              <ul class="list-unstyled links">
                <li><a href="#">All</a></li>
                <li><a href="#">Club News</a></li>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">RSS</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Online Ticket</a></li>
                <li><a href="#">Payment and Prices</a></li>
                <li><a href="#">Contact &amp; Booking</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Coupon</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Standings</a></li>
                <li><a href="#">World Cup</a></li>
                <li><a href="#">La Lega</a></li>
                <li><a href="#">Hyper Cup</a></li>
                <li><a href="#">World League</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved  <i class="icon-heart"
                  aria-hidden="true"></i> by Group-05
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>


  </div>
  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

</body>

</html>