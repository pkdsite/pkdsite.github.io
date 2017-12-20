<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="text/css" href="1.png">
  <title>PKD's WEBSITE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    } 
    div.item{max-height: 200px;}
    
    div.pkd p a{color: white;}
    
    .modal-header, h4, .close {
      background-color: #1E88E5;
      color:white !important;
      text-align: center;
      font-size: 30px;}
    .modal-footer {
      background-color: #f9f9f9;
    }
    .navbar{margin-bottom: 0px !important;}
    
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Pradyumna's</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
      <form class="navbar-form nav navbar-nav" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="xyz"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
         <div class="modal fade" id="myModal" role="dialog">
           <div class="modal-dialog">
    
           <!-- Modal content-->
           <div class="modal-content">
             <div class="modal-header" style="padding:35px 50px;">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
             </div>
             <div class="modal-body" style="padding:40px 50px;">
               <form role="form">
                 <div class="form-group">
                   <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                   <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                 </div>
                 <div class="form-group">
                   <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                   <input type="text" class="form-control" id="psw" placeholder="Enter password">
                 </div>
                 <div class="checkbox"> 
                   <label><input type="checkbox" value="" checked>Remember me</label>
                 </div>
                 <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
               </form>
              </div>
             <div class="modal-footer">
               <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
               <p>Not a member? <a href="#">Sign Up</a></p>
               <p>Forgot <a href="#">Password?</a></p>
             </div>
            </div>
      
          
          </div> 
          </div>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav>
 
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height: 200px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">  
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>  
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="max-height: 200px;">
      <div class="item active">
        <img src="tiger.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Tiger </h3>
          <p>Chitah...</p>
        </div>      
      </div>

      <div class="item">
        <img src="port-bg.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>port-bg</h3>
          <p>wowwww</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="intro-bg.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>introooo </h3>
          <p>hjhhhhkjh...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 
<div class="container-fluid text-center" >    
  <div class="row">
    <div class="col-sm-3 well" style="background-color: orange;">
      <div class="well" style="background-color: black;">
        <p><a href="#" style="color: white;">My Profile</a></p>
        <img src="pkd 1.jpg" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">Shopping</span>
          <span class="label label-success">Web development</span>
          <span class="label label-info">Songs</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <div class="pkd">
      <p><a href="https://www.facebook.com/papun94"><img src="facebook_alt.png"></a></p>
      <p><a href="https://twitter.com/pradyumna_dalai"><img src="twitter_alt.png"></a></p>
      <p><a href="#"><img src="google.png"></a></p>
      <p><a href="#"><img src="skype.png"></a></p>
    </div>
    </div>
    <div class="col-sm-7" style="background-color: orange";>
    
      <div class="row" style="padding-top: 20px;">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Status: Feeling Blue</p>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-down"></span>Dis Like
              </button>     
            </div>
          </div>
        </div>
      </div>
      
      <div class="row" >
        <div class="col-sm-3">
          <div class="well">
           <p>Subhashree Dalai</p>
           <img src="d.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Surya prakash Dash</p>
           <img src="surya pi.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Jane</p>
           <img src="intro-bg.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Anja</p>
           <img src="intro-bg.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well" style="background-color: orange";>
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="intro-bg.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2017</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>contact for web designing.</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy All copy right reserved @PKD</p>
  <a href="https://www.facebook.com/papun94" target="_blank"><img src="facebook_alt.png"></a>
      <a href="https://twitter.com/pradyumna_dalai" target="_blank"><img src="twitter_alt.png"></a>
      <a href="#" target="_blank"><img src="google.png"></a>
      <a href="#" target="_blank"><img src="skype.png"></a>
</footer>
<script>
$(document).ready(function(){
    $("#xyz").click(function(){
        $("#myModal").modal();
    });
});
</script>
</body>
</html>
 