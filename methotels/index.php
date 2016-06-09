<?php 
session_start();

$isLogged = false;
$user = null;

if (isset($_SESSION["user"])) {
  $isLogged = true;
  $user = $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MetHotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <header id="top" class="header">
        <nav class="navbar navbar-default">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="navbar" class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#feature">Hotels</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                </ul>
                <?php if ($isLogged) { ?>
                 <ul class="nav navbar-nav navbar-right">
                  <li><a><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></a></li>
                  <li><a href="php/logout.php">Logout</a></li>
                </ul>
                <?php } else { ?>
                <ul class="nav navbar-nav navbar-right">
                  <li data-toggle="modal" data-target="#signUp"><a>Sign Up</a></li>
                  <li data-toggle="modal" data-target="#signIn"><a>LogIn</a></li>
                </ul>
                <?php } ?>
              </div>
            </div>
          </nav> 
    </header>

    <section id="home">
        <div class="text-vertical-center">
            <h1>METROPOLITAN HOTELS</h1>
            <h3>FEELS LIKE IN HEAVEN</h3>
        </div>
    </section>

    <section id="feature">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area">
              <h2 class="title">Hotels</h2>
              <span class="line"></span>
              <p>SOHO MET TORONTO, SOHO MET RESIDENCES AND SOHO MET VANCOUVER</p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="feature-content">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="single-feature wow zoomIn">
                    <i class="fa fa-leaf feature-icon"></i>
                    <h4 class="feat-title">SOHO MET TORONTO</h4>
                    <p>The SoHo Metropolitan Hotel is simply Toronto's finest, whether you call it a boutique or luxury hotel. Supremely indulgent yet artfully subdued, the downtown Toronto hotel affectionately dubbed "SoHo Met" is a vibrant scene unto itself. From inspired culinary creations to advanced in-room technologies and innovative business services, a limitless range of sophisticated pleasures awaits you.</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="single-feature wow zoomIn">
                    <i class="fa fa-thumbs-o-up feature-icon"></i>
                    <h4 class="feat-title">SOHO MET RESIDENCES</h4>
                    <p>Introducing a new level of luxury ... where innovative features, sophisticated services and stylish amenities combine to make your extended stay, furnished apartment suite in Toronto or Ottawa productive and luxurious.</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="single-feature wow zoomIn">
                    <i class="fa fa-smile-o feature-icon"></i>
                    <h4 class="feat-title">SOHO MET VANCOUVER</h4>
                    <p>Metropolitan Hotel Vancouver — a Vancouver luxury hotel with a superb downtown address and at the same time positioned against a serene mountain backdrop. The downtown Vancouver hotel’s convenient locaion is surrounded by all the pleasures and excitement that one of Canada’s finest cities has to offer, whether you come for business or pleasure.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
		      <h2>Gallery</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="gallery-image">
                                <a href="#">
                                    <img class="img-responsive" src="images/1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery-image">
                                <a href="#">
                                    <img class="img-responsive" src="images/2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery-image">
                                <a href="#">
                                    <img class="img-responsive" src="images/3.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="subscribe">
      <div class="subscribe-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div style="z-index: 9999;" id="signUp" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Sign Up</h4>
          </div>
          <div class="modal-body">
          <form id="register-form" action="php/signup.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
     <div style="z-index: 9999;" id="signIn" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">LogIn</h4>
          </div>
          <div class="modal-body">
           <form id="login-form" action="php/login.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login" id="login" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>